Rotoworld News
===

Easily grab information from Rotoworld's news site. The information obtained with this package are the intellectual property of Rotoworld.com and NBCSports. This is to be used for educational purposes and you should consult with Rotoworld.com or NBC Sports if you are going to use this or information obtained with this anyhow and anywhere.

**Usage**

*Using composer*

This package is set up to be used (and required) via [Composer](http://getcomposer.org/), for example:

    {
        "require": {
            "mgargano/simplehtmldom":"dev-master",
            "mgargano/rotoworld": "dev-master"
        }
    }

*PHP example*
    <?php
    require 'vendor/autoload.php';
    $news = new RotoworldNews\RotoworldNews;
    echo '<PRE>';
    var_dump( $news->get() );
    echo '</PRE>';
