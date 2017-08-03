<?php
/**
 * Craft Algolia plugin for Craft CMS
 *
 * CraftAlgolia Model
 *
 * @author    Dave Fravel
 * @copyright Copyright (c) 2017 Dave Fravel
 * @link      https://davefravel.com
 * @package   CraftAlgolia
 * @since     1.0.0
 */

namespace Craft;

class CraftAlgoliaModel extends BaseModel
{
    /**
     * @return array
     */
    protected function defineAttributes()
    {
        return array_merge(parent::defineAttributes(), array(
            'someField'     => array(AttributeType::String, 'default' => 'some value'),
        ));
    }

}