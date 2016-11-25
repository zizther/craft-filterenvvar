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

    public function envvar($text)
    {
        $filterEnvVar = craft()->filterEnvVar->envvar($text);
        return $filterEnvVar;
    }
}
