<?php

namespace AndrewAndante\WomensRefugeShield;

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\Core\Config\Config;
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
    /**
     * @var bool
     * @config
     */
    private static $use_remote_js = false;

    public function onAfterInit()
    {
        $config = SiteConfig::current_site_config();
        switch ($config->ShieldCode) {
            case 1:
                $this->requireCoreJS();
                Requirements::javascript('andrewandante/womens-refuge-shield: javascript/large_tab.js');
                break;
            case 2:
                $this->requireCoreJS();
                Requirements::javascript('andrewandante/womens-refuge-shield: javascript/small_tab.js');
                break;
        }
    }

    public function getWomensRefugeShieldButton()
    {
        $this->requireCoreJS();
        return $this->owner->renderWith('WomensRefugeShieldButton');
    }

    protected function requireCoreJS()
    {
        if (Config::inst()->get(self::class, 'use_remote_js')) {
            Requirements::javascript('https://staticcdn.co.nz/embed/embed.js');
        } else {
            Requirements::javascript('andrewandante/womens-refuge-shield: javascript/embed.js');
        }
    }
}
