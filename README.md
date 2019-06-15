![build](https://img.shields.io/badge/build-beta-yellow.svg) ![php-version](https://img.shields.io/badge/php-5.6%2B-blue.svg) ![author](https://img.shields.io/badge/author-Marco%20Cusano-blue.svg)

![background](https://www.marcocusano.dev/api/mailchimp-php/background.jpg)

# mailchimp-php
**Mailchimp PHP** is a PHP library developed to include and simplify the creation and connection between websites, online applications and Mailchimp.

## Let's Start
Just PHP 5.6+ is required. Let's start [downloading](https://github.com/marcocusano/mailchimp-php/archive/master.zip) the mailchimp-php library, then extract it to `your_server_path/`.

## Importing
Import the `mailchimp.php` file to any `.php` file where you need to use the **Mailchimp PHP lib**.
```PHP
require_once("your_server_path/mailchimp.php");
```

## Configuration
Before using the **Mailchimp PHP lib**, You must [create your ApiKey](https://us12.admin.mailchimp.com/account/api/), then configure the lib at `mailchimp-php/config.json` as following:
```JSON
{
    "api_key" : "y0ur4p1k3y-dc",
    "dc" : null
}
```
Where:
- `api_key` = Required for any api requests;;
- `dc` = Data Center to repoint manually your api requests (If `null` it will be automatically detected through the `api_key`);

All of these will be added to `$mailchimp->config`. If You need to modify `api_key` and/or `dc` dynamically, You can change it as shown below:
```PHP
// Modify MailChimp
$mailchimp->config->api_key = "YOUR_NEW_API_KEY-DC";
// Modify MailChimp Data Center
$mailchimp->config->dc = "YOUR_NEW_MANUAL_DC";
```

## Ready to mail
You are now ready to use the **Mailchimp PHP lib** as you wish!
Everything you need to know about the library, such as Classes and "How To Use", is described [here in the Wiki](https://github.com/marcocusano/mailchimp-php/wiki).
*I hope this library will help you coding for Mailchimp in PHP. Any suggestion or improvement is always welcome.*

## Change Log
#### v0.1 (2019/06/15)
- First and **beta** release of **mailchimp-php** lib
