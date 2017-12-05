<?php

namespace AndrewAndante\WomensRefugeShield;

use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;
use SilverStripe\SiteConfig\SiteConfig;

/**
 * Class AndrewAndante\WomensRefugeShield\SiteConfigExtension
 *
 * @property SiteConfig $owner
 * @property int $Pridecode
 */
class SiteConfigExtension extends DataExtension
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
            3 => 'None',
        ]));
        $selector->setEmptyString('-- Choose your shield --');
    }
}
