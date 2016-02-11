<?php

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class FilterEnvVarTwigExtension extends Twig_Extension
{

    public function getName()
    {
        return 'Filter Environment Variables';
    }

    public function getFilters()
    {
        return array(
            'envvar' => new Twig_Filter_Method($this, 'envvar', array('is_safe' => array('html'))),
        );
    }

    public $globals = array();

    public function __construct()
    {
        foreach (craft()->globals->allSets as $globalSet)
        {
            foreach ($globalSet->content->attributes as $field => $value)
            {
                $this->globals[$globalSet->handle.'.'.$field] = $value;
            }
        }
    }

    public function envvar($string)
    {
        $string = craft()->config->parseEnvironmentString($string);
        $string = $this->parseGlobals($string);

        return $string;
    }

    public function parseGlobals($string)
    {
        foreach ($this->globals as $key => $value)
        {
            $string = str_replace('{'.$key.'}', $value, $string);
        }

        return $string;
    }

}
