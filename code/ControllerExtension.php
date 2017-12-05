<?php

namespace AndrewAndante\WomensRefugeShield;

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\Core\Extension;
use SilverStripe\SiteConfig\SiteConfig;
use SilverStripe\View\Requirements;


/**
 * Class AndrewAndante\WomensRefugeShield\ControllerExtension
 *
 * @property ContentController $owner
 */
class ControllerExtension extends Extension
{

    public function onAfterInit()
    {
        $config = SiteConfig::current_site_config();
        switch ($config->ShieldCode) {
            case 1:
                Requirements::javascript('https://d3f5l8ze0o4j2m.cloudfront.net/m87/k33spt.js');
                Requirements::javascript('andrewandante/womens-refuge-shield: javascript/large_tab.js');
                break;
            case 2:
                Requirements::javascript('https://d3f5l8ze0o4j2m.cloudfront.net/m87/k33spt.js');
                Requirements::javascript('andrewandante/womens-refuge-shield: javascript/small_tab.js');
                break;
        }
    }

    public function getWomensRefugeShieldButton()
    {
        return $this->owner->renderWith('WomensRefugeShieldButton');
    }
}
