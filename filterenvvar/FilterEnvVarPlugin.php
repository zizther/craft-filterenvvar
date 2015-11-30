<?php
namespace Craft;

class FilterEnvVarPlugin extends BasePlugin
{

    public function getName()
    {
        return Craft::t('Filter Environment Variables');
    }

    public function getDescription()
    {
        return 'Replace environment variable strings in your Twig variables.';
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/lindseydiloreto/craft-filterenvvar';
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Double Secret Agency';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/lindseydiloreto/craft-filterenvvar';
        //return 'http://doublesecretagency.com';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.filterenvvar.twigextensions.FilterEnvVarTwigExtension');

        return new FilterEnvVarTwigExtension();
    }

}
