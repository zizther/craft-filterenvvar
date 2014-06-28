Filter Environment Variables plugin for Craft CMS
=================================================

Replace environment variable strings in your Twig variables!

## What's an environment variable?

Defined within your **config/general.php** file, they reference strings which can be different on each of your environments. The most common example is the `{siteUrl}` string.

[Learn more about environment variables...](http://buildwithcraft.com/docs/multi-environment-configs#environment-specific-variables)

## How do I use it?

Just apply the `envvar` filter to your Twig variable:

    {% set myVar = '{siteUrl}/contact-us' %}
    
    {{ myVar | envvar }}

That's it! Any environment variables defined in your config file will now be parsed.