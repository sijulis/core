/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Add / update gift certificate controller
 *  
 * @author    Creative Development LLC <info@cdev.ru> 
 * @copyright Copyright (c) 2011 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @version   GIT: $Id$
 * @link      http://www.litecommerce.com/
 * @since     3.0.0
 */
jQuery(document).ready(
  function() {

    // Add gift certificate verify popup controller
    jQuery('.gc-verify').click(
      function() {
        return !popup.load(this);  
      }
    );

    // Assign min/max for amount field
    var e = jQuery('.gift-certificate input[name="amount"]').get(0);
    if (e) {
      e.min = gcMinAmount;
      e.max = gcMaxAmount;
    }

    // Change delivery boxes visibility
    jQuery('.gift-certificate ul.delivery input').click(
      function() {
        if (this.value == 'E') {
          jQuery('.gift-certificate .delivery-email').show();
          jQuery('.gift-certificate .delivery-post').hide();

        } else {
          jQuery('.gift-certificate .delivery-post').show();
          jQuery('.gift-certificate .delivery-email').hide();
        }

        return true;
      }
    );

    // Change border icon
    jQuery('.gift-certificate select[name="border"]').change(
      function() {
        var border_img = document.getElementById('border_img');
        if (border_img) {
          border_img.src = bordersDir + this.options[this.selectedIndex].text + '.gif';
        }
      }
    );

  }
);
