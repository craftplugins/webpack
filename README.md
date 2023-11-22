> [!IMPORTANT]
>
> **This plugin is no longer maintained.**
>
> We recommend using the [Twigpack plugin](https://plugins.craftcms.com/twigpack) instead.

# Webpack plugin for Craft CMS

Craft CMS plugin to help extract hashed Webpack filenames from a manifest.json file.

Webpack works on Craft 2.4.x and Craft 2.5.x.

## Webpack Overview

Built to work with [webpack-manifest-plugin](https://github.com/danethurber/webpack-manifest-plugin).

This plugin expects a key/value JSON manifest file with content similar to that shown below.

```json
{
  "mods/alpha.js": "mods/alpha.1234567890.js",
  "mods/omega.js": "mods/omega.0987654321.js"
}
```

## Configuring Webpack

Add a `webpack.php` to your config directory.

```php
/**
 * The path to the manifest.json file.
 *
 * @var string
 */
'path' => CRAFT_BASE_PATH.'../public/assets/manifest.json',

/**
 * A string to prepend to filenames.
 *
 * @var string
 */
'prefix' => '/assets/',
```

## Using Webpack

```twig
<html>
  <head>
    <link rel="stylesheet" href="{{ craft.webpack.getFilename('main.css') }}">
  </head>
  <body>
    <script src="{{ craft.webpack.getFilename('main.js') }}"></script>
  </body>
</html>
```
