<?php

/**
 * Webpack plugin for Craft CMS
 *
 * Webpack Variable
 *
 * @author    Joshua Baker
 * @copyright Copyright (c) 2017 Joshua Baker
 * @link      https://joshuabaker.com/
 * @package   Webpack
 * @since     0.1.0
 */

namespace Craft;

class WebpackVariable
{
    public function getFilename($key)
    {
        return craft()->webpack->getFilename($key);
    }
}
