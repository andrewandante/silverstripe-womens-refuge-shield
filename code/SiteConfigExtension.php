<?php

namespace AndrewAndante\WomensRefugeShield;

use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Core\Extension;
use SilverStripe\SiteConfig\SiteConfig;

/**
 * Class AndrewAndante\WomensRefugeShield\SiteConfigExtension
 *
 * @property SiteConfig $owner
 * @property int $ShieldCode
 */
class SiteConfigExtension extends Extension
{

    private static array $db = [
        'ShieldCode' => 'Int',
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.Main', [
            DropdownField::create('ShieldCode', 'Select the type of shield to display', [
                1 => 'Large Tab',
                2 => 'Small Tab',
                3 => 'None',
            ])->setEmptyString('-- Choose your shield --')
        ]);
    }
}
