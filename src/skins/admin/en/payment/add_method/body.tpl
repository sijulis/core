{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Add payment type widget
 *
 * @author    Creative Development LLC <info@cdev.ru>
 * @copyright Copyright (c) 2011-2012 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.litecommerce.com/
 *}

<div class="add-payment-box payment-type-{getPaymentType()}">

  <ul IF="%\XLite\Model\Payment\Method::TYPE_ALLINONE%=getPaymentType()" class="tabs-container">

    <li class="tab all-in-one-solutions selected">
      <ul>
        <li class="header">
          <div class="main-head">{t(#All-in-one solutions#)}</div>
          <div class="small-head">{t(#No merchant account required#)}</div>
        </li>
        <li class="body">
          <div class="body-box">
            <div class="everything-you-need">{t(#Everything you need#)}</div>
            <div class="description">{t(#All-in-one solution description#)}</div>
            <widget class="\XLite\View\Payment\MethodsPopupList" paymentType={%\XLite\Model\Payment\Method::TYPE_ALLINONE%} />
          </div>
        </li>
      </ul>
    </li>

    <li class="tab payment-gateways">
      <ul>
        <li class="header">
          <div class="main-head">{t(#Payment gateways#)}</div>
          <div class="small-head">{t(#Requires registered merchant account#)}</div>
        </li>
        <li class="body">
          <div class="body-box">
            <div class="everything-you-need">{t(#Everything you need for payment gateways#)}</div>
            <div class="description">{t(#Payment gateways description#)}</div>
            <widget class="\XLite\View\Payment\MethodsPopupList" paymentType={%\XLite\Model\Payment\Method::TYPE_CC_GATEWAY%} />
          </div>
        </li>
      </ul>
    </li>

  </ul>

  <ul IF="%\XLite\Model\Payment\Method::TYPE_ALTERNATIVE%=getPaymentType()" class="tabs-container alternative-methods">
    <li class="alternative selected tab">
      <ul>
        <li class="body">
          <div class="body-box">
            <div class="everything-you-need">{t(#Everything you need for alternative payment methods#)}</div>
            <div class="description">{t(#Alternative payment methods description#)}</div>
            <widget class="\XLite\View\Payment\MethodsPopupList" paymentType={%\XLite\Model\Payment\Method::TYPE_ALTERNATIVE%} />
          </div>
        </li>
      </ul>
    </li>
  </ul>

  <ul IF="%\XLite\Model\Payment\Method::TYPE_OFFLINE%=getPaymentType()" class="offline-methods tabs-container">
    <li class="offline selected tab">
      <ul>
        <li class="body">
          <list name="payment.method.add.offline" />
        </li>
      </ul>
    </li>
  </ul>

</div>
