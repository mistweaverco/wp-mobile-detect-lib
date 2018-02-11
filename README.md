WP Mobile Detect Lib
====================

A plugin for Wordpress that makes the awesome 
[Mobile\_Detect.php][mobile_detect-website] available globally.

This plugin was created, because there seems to be no other plugin available
which does this, which is not outdated.

I plan to keep this in sync with the [official upstream][mobile_detect-github].

## Usage Example

```php
<?php
// Content of /var/www/wp-content/themes/best-theme/header.php
$md = getMobileDetectLib();
if ($md->isMobile())
        echo "IS MOBILE";
else
        echo "IS DESKTOP";
?>
```

## Methods / Functions

Because this just a *wrapper* for the awesome *Mobile_Detect.php*,
You need to check their [documentation][mobile_detect-examples] on what
methods/functions are available to you.



[mobile_detect-website]: http://mobiledetect.net/
[mobile_detect-github]: https://github.com/serbanghita/Mobile-Detect
[mobile_detect-examples]: https://github.com/serbanghita/Mobile-Detect/wiki/Code-examples

