<?php

/**
 * Class WomensRefugeShieldControllerExtension
 *
 * @property ContentController $owner
 */
class WomensRefugeShieldControllerExtension extends Extension
{
    /**
     * @var bool
     * @config
     */
    private static $use_remote_js = false;

    private $jsDir = SS_WOMENS_REFUGE_DIR . DIRECTORY_SEPARATOR . 'javascript' . DIRECTORY_SEPARATOR;

    public function onAfterInit()
    {
        $config = SiteConfig::current_site_config();
        switch ($config->ShieldCode) {
            case 1:
                $this->requireCoreJS();
                Requirements::javascript($this->jsDir . 'large_tab.js');
                break;
            case 2:
                $this->requireCoreJS();
                Requirements::javascript($this->jsDir . 'small_tab.js');
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
            Requirements::javascript($this->jsDir . 'embed.js');
        }
    }
}
