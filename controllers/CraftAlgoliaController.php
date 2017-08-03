<?php
/**
 * Craft Algolia plugin for Craft CMS
 *
 * CraftAlgolia Controller
 *
 * @author    Dave Fravel
 * @copyright Copyright (c) 2017 Dave Fravel
 * @link      https://davefravel.com
 * @package   CraftAlgolia
 * @since     1.0.0
 */

namespace Craft;

class CraftAlgoliaController extends BaseController
{

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     * @access protected
     */
    protected $allowAnonymous = array('actionIndex',
        );

    /**
     */
    public function actionIndex()
    {
    }
}