<?php

namespace Craft;

class SwitchedoffPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Switched Off Fieldtype');
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'Yuri Salimovskiy';
    }

    public function getDeveloperUrl()
    {
        return 'http://www.intoeetive.com';
    }

    public function hasCpSection()
    {
        return false;
    }
}
