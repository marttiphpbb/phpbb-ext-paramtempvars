### phpBB 3.1 PhpBB Extension - marttiphpbb Parameter Template Variables


    PARAMTEMPVARS_<param_name>

The extension produces for each parameter in the query of the url a template variable. `<param_name>` is in uppercase. For example if you want to put some content on the private messages pages only --> The url is: your-domain.org/ucp.php?i=pm. Then you can select the private messages pages with:

    <!-- IF SCRIPT_NAME == 'ucp' and PARAMTEMPVARS_I == 'pm'  -->
    Your content for the private messages pages only  ...
    <!-- ENDIF -->

#### Quick Install

You can install this on the latest release of phpBB 3.1 by following the steps below:

* Create `marttiphpbb/paramtempvars` in the `ext` directory.
* Download and unpack the repository into `ext/marttiphpbb/paramtempvars`
* Enable `Parameter Template Variables` in the ACP at `Customise -> Manage extensions`.

#### Uninstall

* Disable `Parameter Template Variables` in the ACP at `Customise -> Extension Management -> Extensions`.
* To permanently uninstall, click `Delete Data`


#### Support

* **Important: Only official release versions validated by the phpBB Extensions Team should be installed on a live forum. Pre-release (beta, RC) versions downloaded from this repository are only to be used for testing on offline/development forums and are not officially supported.**
* Report bugs and other issues to the [Issue Tracker](https://github.com/marttiphpbb/phpbb-ext-paramtempvars/issues).

#### License

[GPL-2.0](license.txt)
