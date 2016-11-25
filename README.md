Filter Environment Variables plugin for Craft CMS
=================================================

Replace environment variable strings in your Twig variables.

Include reference tokens for environment variables in your field values. To make a value parseable, enclose it with **single-brackets** and **no spaces**.

    Lorem ipsum {myEnvironmentVariable} sit amet.

The token name should be an exact match of an existing environment variable. If no match is found, the token will not be parsed out.

## How do I use it?

Just apply the `envvar` filter to your Twig variable:

    {{ entry.favoritePage | envvar }}

This also works if the token is part of a hard-coded string:

    {{ '{baseUrl}/contact-us' | envvar }}

That's it! Any matching environment variables defined in your config file will be parsed.

## What's an environment variable?

Within your `config/general.php` file, they are strings which can be defined differently for each of your environments.

Learn more about [environment variables...](http://buildwithcraft.com/docs/multi-environment-configs#environment-specific-variables)

## Update

Now supports globals using the same filter

	{global.slogan}
	
The functionality has also been put into the service layer, so it can also be used like

	craft()->filterEnvVar->envvar($text)