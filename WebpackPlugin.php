<?php

/**
 * Webpack plugin for Craft CMS
 *
 * Craft CMS plugin to help extract hashed Webpack filenames from a manifest.json file.
 *
 * @author    Joshua Baker
 * @copyright Copyright (c) 2017 Joshua Baker
 * @link      https://joshuabaker.com/
 * @package   Webpack
 * @since     0.1.0
 */

namespace Craft;

class WebpackPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Webpack');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Craft CMS plugin to help extract hashed Webpack filenames from a manifest.json file.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/joshuabaker/craft-webpack/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/joshuabaker/craft-webpack/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '0.1.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '0.1.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Joshua Baker';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://joshuabaker.com/';
    }
}
