yii2-sharelinks-widget
======================

Yii2 widget for popular social networks "share link" generation

## Supported Social Networks

* [Facebook](http://facebook.com)
* [Twitter](http://twitter.com)
* [Google+](http://plus.google.com)
* [Vkontakte](http://vk.com)
* [LinkedIn](http://linkedin.com)
* [Send to Kindle](http://fivefilters.org/kindle-it)

## Installation via Composer
run in console
`"$ composer.phar require dlds/yii2-shareit": "dev-master"`

## Usage Example

~~~php
echo \Yii::$app->shareIt->shareLink(ShareIt::SOCIAL_FACEBOOK, [
    'class' => 'my-custom-class',
]);
~~~