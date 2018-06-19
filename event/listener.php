<?php
/**
* phpBB Extension - marttiphpbb paramtempvars
* @copyright (c) 2014 - 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\paramtempvars\event;

use phpbb\event\data as event;
use phpbb\user;
use marttiphpbb\paramtempvars\util\paramtempvars_directory;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $user;

	public function __construct(user $user)
	{
		$this->user = $user;
	}

	static public function getSubscribedEvents()
	{
		return [
			'core.twig_environment_render_template_before'
				=> 'core_twig_environment_render_template_before',
		];
	}

	public function core_twig_environment_render_template_before(event $event)
	{
		$query_string = $this->user->page['query_string'];
		$params = [];
		parse_str($query_string, $params);

		if (!count($params))
		{
			return;
		}

		$context = $event['context'];

		foreach ($params as $name => $value)
		{
			$context['PARAMTEMPVARS_' . strtoupper($name)] = $value;
		}

		$context['marttiphpbb_paramtempvars'] = $params;

		$event['context'] = $context;
	}
}
