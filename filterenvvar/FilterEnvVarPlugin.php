<?php

namespace Craft;

class FilterEnvVarPlugin extends BasePlugin
{   
    public function getName()
    {
        return Craft::t('Filter Environment Variables');
    }

    public function getVersion()
    {
        return '0.9.9';
    }

    public function getDeveloper()
    {
        return 'Double Secret Agency';
    }

    public function getDeveloperUrl()
    {
        return 'http://doublesecretagency.com';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.filterenvvar.twigextensions.FilterEnvVarTwigExtension');
       
        return new FilterEnvVarTwigExtension();
    }
}
