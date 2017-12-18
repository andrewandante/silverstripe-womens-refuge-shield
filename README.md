# Women's Refuge Site Shield

This small module is to help you add the [Women's Refuge Shielded Site button](https://shielded.co.nz/) to your SilverStripe website.

# Usage

This code will help you add the shield to your SilverStripe website.

Select the preferred size in your SiteConfig, and the `WomensRefugeShieldControllerExtension` will inject the necessary Javascript and CSS in to your pages.

That's all there is to it.

# Installation

Include the shield code with `composer require andrewandante/womens-refuge-shield` and select your preferred size in the CMS under Settings.

Large tab:

![Large tab](img/screenshots/large_tab.PNG?raw=true)

Small tab:

![Small tab](img/screenshots/small_tab.PNG?raw=true)

Alternatively, you can include `$WomensRefugeShieldButton` anywhere in your template:

![Button in the footer](img/screenshots/button_in_footer.PNG?raw=true)

## Security

This module does allow Javascript from a third-party source, and as such should be treated with a level of caution. Theoretically, this could change at any time. As a result, a copy of the Javascript has been included in the module, which will be periodically updated when the remote script is.

By default, the module will use the committed version of the Javascript. To authorise the use of the remote version, add the following to your site config:

```yaml
WomensRefugeShieldControllerExtension:
  use_remote_js: true
```

We have spoken with the original authors of the script, and it has undergone security testing, in particular with regards to:

- How well the site meets the objectives of being difficult to detect.
- How secure the Shielded Site is.
- Whether the inclusion of the Shielded Site introduces significant risk to sites it is hosted on.

We are satisfied with this review, but each site is different and will have different requirements for you to consider.

# Options

You can view all the options on the [Women's Refuge Shielded Site website](https://shielded.co.nz/).


# TODO

 - responsiveness

# Special Thanks

- Katie Elks for the inspiration!
- Simon Erkelens for the module skeleton!
- [Women's Refuge New Zealand](https://shielded.co.nz/) for the implementation!
