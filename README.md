# PhpBB Extension - marttiphpbb Parameter Template Variables

    PARAMTEMPVARS_<param_name>

The extension produces for each parameter in the query of the url a template variable. `<param_name>` is in uppercase. For example if you want to put some content on the private messages pages only --> The url is: your-domain.org/ucp.php?i=pm. Then you can select the private messages pages with:

    <!-- IF SCRIPT_NAME == 'ucp' and PARAMTEMPVARS_I == 'pm'  -->
    Your content for the private messages pages only  ...
    <!-- ENDIF -->

## Requirements

* phpBB 3.2+
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
