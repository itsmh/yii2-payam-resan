yii2-payam-resan
================
payam-resan sms panel yii2 integration

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist itsmh/yii2-payam-resan "*"
```

or add

```
"itsmh/yii2-payam-resan": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
'components' => [
    'sms' => [
        'class' => 'itsmh\yii2payamresan\sms',
        'username' => "username-goes-here",
        'password' => "password-goes-here",
        'sendNumber' => "+98XXXXXXXXXXX"
    ],
    // other components ...
```
and in you app you can access it via `Yii::$app->sms->send("Some text", "09XXXXXXXXX");`

TO DO
-----
- [x] Send sms
- [ ] Get status of the message
- [ ] Send bulk sms
- [ ] Contacts