<?php
/**
 * Rubedo -- ECM solution
 * Copyright (c) 2013, WebTales (http://www.webtales.fr/).
 * All rights reserved.
 * licensing@webtales.fr
 *
 * Open Source License
 * ------------------------------------------------------------------------------------------
 * Rubedo is licensed under the terms of the Open Source GPL 3.0 license. 
 *
 * @category   Rubedo
 * @package    Rubedo
 * @copyright  Copyright (c) 2012-2013 WebTales (http://www.webtales.fr)
 * @license    http://www.gnu.org/licenses/gpl.html Open Source GPL 3.0 license
 */
namespace Rubedo\Collection;

use Rubedo\Interfaces\Collection\ICustomThemes;

/**
 * Service to handle FieldTypes
 *
 * @author jbourdin
 * @category Rubedo
 * @package Rubedo
 */
class CustomThemes extends AbstractCollection implements ICustomThemes
{

    public function __construct ()
    {
        $this->_collectionName = 'CustomThemes';
        parent::__construct();
    }
}