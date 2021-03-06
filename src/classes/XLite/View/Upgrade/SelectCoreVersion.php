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
 * PHP version 5.3.0
 *
 * @category  LiteCommerce
 * @author    Creative Development LLC <info@cdev.ru>
 * @copyright Copyright (c) 2011-2012 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.litecommerce.com/
 */

namespace XLite\View\Upgrade;

/**
 * SelectCoreVersion
 *
 *
 * @ListChild (list="admin.center", zone="admin")
 */
class SelectCoreVersion extends \XLite\View\Upgrade\AUpgrade
{
    /**
     * Return list of the modes allowed by default
     *
     * @return array
     */
    protected function getDefaultModes()
    {
        $list = parent::getDefaultModes();
        $list[] = 'select_core_version';

        return $list;
    }

    /**
     * Get directory where template is located (body.tpl)
     *
     * @return string
     */
    protected function getDir()
    {
        return parent::getDir() . '/select_core_version';
    }

    /**
     * Return internal list name
     *
     * @return string
     */
    protected function getListName()
    {
        return parent::getListName() . '.select_core_version';
    }

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible() && $this->isCoreSelection();
    }

    /**
     * Label for cores list selectbox
     *
     * @return string
     */
    protected function getSelectBoxLabel()
    {
        return 'Your version (' . \XLite::getInstance()->getMajorVersion() . ') can be upgraded to';
    }
}
