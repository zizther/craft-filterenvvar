<?php
namespace Craft;

class FilterEnvVarService extends BaseApplicationComponent
{
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

     public function parseGlobals($string)
     {
         foreach ($this->globals as $key => $value)
         {
             $string = str_replace('{'.$key.'}', $value, $string);
         }

         return $string;
     }


     /**
 	 * Convert config and globals from fields
 	 *
 	 * HOW TO USE IT
 	 * craft()->filterEnvVar->envvar()
 	 *
 	 */
     public function envvar($string)
     {
         $string = craft()->config->parseEnvironmentString($string);
         $string = $this->parseGlobals($string);

         return $string;
     }
}
