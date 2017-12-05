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
            $selector = DropdownField::create('ShieldCode', 'Select the type of shield to display', [
            1 => 'Large Tab',
            2 => 'Small Tab',
            3 => 'Button',
            4 => 'None',
        ]));
        $selector->setEmptyString('-- Choose your shield --');
    }
}
