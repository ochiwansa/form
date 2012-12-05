# Meido Form

[![Build Status](https://secure.travis-ci.org/meido/form.png?branch=master)](https://travis-ci.org/meido/form)

A port of Laravel 3's Form class. Made to work with Laravel 4.

## Usage

### Composer Side

add `"meido/form": "1.0.*"` to the `require` section of your `composer.json` so that it should look something the code below (you can, of course, include your own dependencies)

```composer
...
...
...
"require": {
	...
	...
	...
	"meido/form": "1.0.*"
},
...
...
...
```

### Laravel Side

add the following code to the `providers` section of the `app/config/app.php` file

```php
'Meido\Form\Providers\FormServiceProvider',
```

so that it'll look something like the following

```php
'providers' => array(

	...
	...
	...
	'Meido\Form\Providers\FormServiceProvider',

),
```

and add the following code to the `aliases` section of the `app/config/app.php` file

```php
'Form' => 'Meido\Form\Facades\Form',
```

so that it'll look something like the following

```php
'aliases' => array(

	...
	...
	...
	'Form'       => 'Meido\Form\Facades\Form',
	
),
```

after that, run `composer install` and start hacking on that beast.

## Thing to note

- Custom Form macro are not supported.