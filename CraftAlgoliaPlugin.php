<?php
/**
 * Craft Algolia plugin for Craft CMS
 *
 * Integration of the Algolia Search as a Service in a Craft CMS 2.5.x website
 *
 * @author    Dave Fravel
 * @copyright Copyright (c) 2017 Dave Fravel
 * @link      https://davefravel.com
 * @package   CraftAlgolia
 * @since     1.0.0
 */

namespace Craft;

class CraftAlgoliaPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Craft Algolia');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Integration of the Algolia Search as a Service in a Craft CMS 2.5.x website');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/dfravel/craftalgolia/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/dfravel/craftalgolia/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Dave Fravel';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://davefravel.com';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}
