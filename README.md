# PhpBB Extension - marttiphpbb Parameter Template Variables

The extension makes all query parameters of the current url available in
the template. They are all put under the template variable `marttiphpbb_paramtempvars`

I.e:

    {%- if SCRIPT_NAME == 'ucp' and marttiphpbb_paramtempvars.i == 'pm' -%}
        This content is only visible in the private messages page in the UCP...
        Url: https://your-domain.org/ucp.php?i=pm
    {%- endif -%}

In the previous version (for phpBB 3.1) this extension made the query parameters available in the form of:

    PARAMTEMPVARS_<parameter_name_uppercase>

This format is still available but depreciated.

## Requirements

* phpBB 3.2.1+
* PHP 7+

## Quick Install

You can install this on the latest release of phpBB by following the steps below:

* Create `marttiphpbb/paramtempvars` in the `ext` directory.
* Download and unpack the repository into `ext/marttiphpbb/paramtempvars`
* Enable `Parameter Template Variables` in the ACP at `Customise -> Manage extensions`.

## Uninstall

* Disable `Parameter Template Variables` in the ACP at `Customise -> Extension Management -> Extensions`.
* To permanently uninstall, click `Delete Data`

## Support

* Report bugs and other issues to the [Issue Tracker](https://github.com/marttiphpbb/phpbb-ext-paramtempvars/issues).

## License

[GPL-2.0](license.txt)
