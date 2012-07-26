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
 * @copyright Copyright (c) 2010-2012 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.litecommerce.com/
 */

namespace XLite\Module\CDev\SocialLogin\View\FormField;


/**
 * Configuration instructions widget for SocialLogin
 *
 */
class Instructions extends \XLite\View\FormField\Label\ALabel
{
    /**
     * WEB LC root postprocessing constant
     */
    const WEB_LC_ROOT = '{{WEB_LC_ROOT}}';

    /**
     * Register CSS files
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();

        $list[] = 'modules/CDev/SocialLogin/style.css';

        return $list;
    }

    /**
     * Process all occurencies of WEB_LC_ROOT
     *
     * @param mixed $str Input string
     *
     * @return string
     */
    public function processUrls($str)
    {
        return str_replace(
            static::WEB_LC_ROOT,
            htmlentities(\XLite::getInstance()->getShopURL(null)),
            $str
        );
    }

    /**
     * Return field template
     *
     * @return string
     */
    protected function getFieldTemplate()
    {
        return 'modules/CDev/SocialLogin/form_field/instructions.tpl';
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'modules/CDev/SocialLogin/form_field/instructions.tpl';
    }
}
