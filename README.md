# yii2-markdown-doc

Yii2 module to display the content of all markdown file in a directory and its sub-folder.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist "macfly/yii2-markdown-doc" "^1.0.0"
```

or add

```
"macfly/yii2-markdown-doc": "^1.0.0"
```

to the require section of your `composer.json` file.

Configure
------------

Configure **config/web.php** as follows

```php
'modules' => [
    ................
    'doc'  => [
        'class' => 'macfly\yii2\doc\Module',
        // Directory to list
        'rootDocDir' => '@app/docs',
        // set false if you don't want to cache generated html, usefull for debugging 
        //'cache' => true,
    ]
    ................
],
```

Usage
------------

To access the doc, go to http://yoursite.com/doc/
