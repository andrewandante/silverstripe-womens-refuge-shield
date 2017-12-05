<?php


/**
 * Class WomensRefugeShieldControllerExtension
 *
 * @property ContentController $owner
 */
class WomensRefugeShieldControllerExtension extends Extension
{

    public function onAfterInit()
    {
        $config = SiteConfig::current_site_config();
        $jsDir = SS_WOMENS_REFUGE_DIR . DIRECTORY_SEPARATOR . 'javascript' . DIRECTORY_SEPARATOR;
        switch ($config->ShieldCode) {
            case 1:
                Requirements::javascript('https://d3f5l8ze0o4j2m.cloudfront.net/m87/k33spt.js');
                Requirements::javascript($jsDir.'large_tab.js');
                break;
            case 2:
                Requirements::javascript('https://d3f5l8ze0o4j2m.cloudfront.net/m87/k33spt.js');
                Requirements::javascript($jsDir.'small_tab.js');
                break;
            case 3:
                Requirements::javascript('https://d3f5l8ze0o4j2m.cloudfront.net/m87/k33spt.js');
                Requirements::javascript($jsDir.'button.js');
                break;
        }
    }
}
