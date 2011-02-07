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
 * @subpackage View
 * @author     Creative Development LLC <info@cdev.ru> 
 * @copyright  Copyright (c) 2011 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @version    GIT: $Id$
 * @link       http://www.litecommerce.com/
 * @see        ____file_see____
 * @since      3.0.0
 */

namespace XLite\View\Checkout;

/**
 * Billing address block 
 * 
 * @package XLite
 * @see     ____class_see____
 * @since   3.0.0
 */
class BillingAddress extends \XLite\View\AView
{
    /**
     * Return widget default template
     *
     * @return string
     * @access protected
     * @see    ____func_see____
     * @since  3.0.0
     */
    protected function getDefaultTemplate()
    {
        return 'checkout/steps/payment/address.tpl';
    }

    /**
     * Check - shipping and billing addrsses are same or not
     *
     * @return boolean
     * @access public
     * @see    ____func_see____
     * @since  3.0.0
     */
    public function isSameAddress()
    {
        return $this->getCart()->getProfile() && $this->getCart()->getProfile()->isEqualAddress();
    }

    /**
     * Get same-as-shipping address 
     * 
     * @return \XLite\Model\Address
     * @access public
     * @see    ____func_see____
     * @since  3.0.0
     */
    public function getSameAddress()
    {
        $address = null;

        if ($this->getCart()->getProfile()) {
            $address = $this->isSameAddress()
                ? $this->getCart()->getProfile()->getBillingAddress()
                : $this->getCart()->getProfile()->getShippingAddress();
        }

        return $address;
    }

}
