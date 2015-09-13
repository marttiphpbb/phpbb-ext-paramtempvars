<?php
/**
* phpBB Extension - marttiphpbb paramtempvars
* @copyright (c) 2014 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\paramtempvars\event;

use phpbb\template\twig\twig as template;
use phpbb\user;

use marttiphpbb\paramtempvars\model\paramtempvars_directory;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/* @var template */
	protected $template;

	/* @var user */
	protected $user;

	/**
	 * @param template $template
	 * @param user $user
	*/
	public function __construct(
		template $template,
		user $user
	)
	{
		$this->template = $template;
		$this->user = $user;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_footer'		=> 'core_page_footer',
		);
	}

	public function core_page_footer($event)
	{
		$query_string = $this->user->page['query_string'];

		$params = $template_vars = array();
		parse_str($query_string, $params);

		foreach ($params as $name => $value)
		{
			$template_vars['PARAMTEMPVARS_' . strtoupper($name)] = $value;
		}

		if (sizeof($template_vars))
		{
			$this->template->assign_vars($template_vars);
		}
	}
}
