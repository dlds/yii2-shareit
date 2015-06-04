yii2-shareit
============

Yii2 Social Share links generator

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