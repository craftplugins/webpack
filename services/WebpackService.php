<?php

/**
 * Webpack plugin for Craft CMS
 *
 * Webpack Service
 *
 * @author    Joshua Baker
 * @copyright Copyright (c) 2017 Joshua Baker
 * @link      https://joshuabaker.com/
 * @package   Webpack
 * @since     0.1.0
 */

namespace Craft;

class WebpackService extends BaseApplicationComponent
{
    /**
     * @const string
     */
    const CACHE_KEY = 'webpack-filenames';

    /**
     * @var object
     */
    protected $filenames;

    /**
     * Gets all filenames, caching for subsequent calls.
     *
     * @return object
     */
    public function getFilenames()
    {
        if (is_null($this->filenames)) {
            $this->filenames = $this->getFilenamesCache();

            if (empty($filenames)) {
                $path = craft()->config->get('path', 'webpack');
                $contents = file_get_contents($path);
                $this->filenames = json_decode($contents);

                $this->setFilenamesCache($this->filenames);
            }
        }

        return $this->filenames;
    }

    /**
     * Returns the filename value for the provided key.
     *
     * @param string $key
     *
     * @return string
     */
    public function getFilename($key)
    {
        $prefix = craft()->config->get('prefix', 'webpack');
        $filenames = $this->getFilenames();

        if (!isset($filenames->{$key})) {
            throw new Exception("No filename is defined for ‘{$key}’.");
        }

        return $prefix.$filenames->{$key};
    }

    /**
     * Gets filenames from the cache when not in developer mode.
     *
     * @return object
     */
    protected function getFilenamesCache()
    {
        if (craft()->config->get('devMode') === false) {
            return craft()->cache->get(static::CACHE_KEY);
        }
    }

    /**
     * Sets filenames cache when not in developer mode.
     *
     * @param object $value
     *
     * @return bool
     */
    protected function setFilenamesCache($value)
    {
        if (craft()->config->get('devMode') === false) {
            return craft()->cache->set(static::CACHE_KEY, $value);
        }
    }
}
