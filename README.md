<a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
</a>
<h2 align="center">Yii 2 + AdminLTE 3 (Bootstrap 4)</h2>
<h3>Yii2 Basic Project Template Build on AssetBundle (No CDN/Import CSS,JS Files)</h3>
<br>

![ss](https://i.imgur.com/4LnfO1T.png)


Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-basic.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-basic)


REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install via Composer

```
$ git clone https://github.com/kongvut/yii2-basic-adminlte3
$ cd yii2-basic-adminlte3
$ composer install
```

Run Server Development
~~~
$ ./yii serve
Server started on http://localhost:8080
~~~

CONFIGURATION
-------------

### Theme Structure

      themes/adminlte3/views/layouts/main.php       contains base layout
      views/layouts/app.layout.php                  contains main app layout
      views/layouts/header.php                      contains header menu for app app layout
      views/layouts/menu.php                        contains menu for app app layout

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```