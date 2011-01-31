<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * LiteCommerce
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to licensing@litecommerce.com so we can send you a copy immediately.
 * 
 * @category   LiteCommerce
 * @package    XLite
 * @subpackage Controller
 * @author     Creative Development LLC <info@cdev.ru> 
 * @copyright  Copyright (c) 2011 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @version    GIT: $Id$
 * @link       http://www.litecommerce.com/
 * @see        ____file_see____
 * @since      3.0.0
 */

namespace XLite\Module\CDev\Froogle\Controller\Admin;

/**
 * ____description____
 * 
 * @package XLite
 * @see     ____class_see____
 * @since   3.0.0
 */
class Module extends \XLite\Controller\Admin\Module implements \XLite\Base\IDecorator
{
    function init()
    {
        parent::init();

        if ($this->page == "Froogle") {
        	$layout = \XLite\Model\Layout::getInstance();
        	$layout->addLayout('general_settings.tpl', "modules/CDev/Froogle/config.tpl");
        }
    }

    function isDisplayOverrideOption()
    {
        return ($this->config->Version->version > "2.2.21") ? true : false;
    }

    function isVersionUpper2_1()
    {
    
        return ($this->config->Version->version >= "2.2") ? true : false;
    }

    function getFroogleOptions()
    {
        $options = array();
        foreach ($this->getOptions() as $opt) {
            $options[$opt->get('name')] = $opt;
        }

        return $options;
    }
}
