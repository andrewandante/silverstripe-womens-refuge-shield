<?php

/**
 * Class WomensRefugeShieldSiteConfigExtension
 *
 * @property SiteConfig $owner
 * @property int $Pridecode
 */
class WomensRefugeShieldSiteConfigExtension extends DataExtension
{
    private static $db = array(
        'ShieldCode' => 'Int'
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Main',
            DropdownField::create('ShieldCode', 'Select the type of shield to display', [
                1 => 'Large Tab',
                2 => 'Small Tab',
                3 => 'None',
            ])->setEmptyString('-- Choose your shield --')
        );
    }
}
