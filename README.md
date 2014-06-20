MtZendeskApi - ZF2 module wrapper for Zendesk PHP SDK
=====================================================

This module allows easy access of Zendesk API from within Zend Framework 2 application.


Installation
------------
Installation is supported via Composer:

1. Add `"mtymek/mt-zendesk-api":"dev-master"` to your `composer.json` file and run `php composer.phar update`.
2. Add `MtZendeskApi` to your `config/application.config.php` file under the modules key.


Configuration
-------------

1. Copy `config/zendesk.local.php.dist` file into your main application's `config/autoload' directory,
rename it to `zendesk.local.php`
2. Replace placeholder values with subdomain, username and API token read from Zendesk settings page