/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Price field controller
 *
 * @author    Creative Development LLC <info@cdev.ru>
 * @copyright Copyright (c) 2011-2012 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.litecommerce.com/
 */

CommonForm.elementControllers.push(
  {
    pattern: '.inline-field.inline-color',
    handler: function () {

      var field = jQuery(this);

      var input = jQuery('.field :input.color', this).eq(0);

      // Check - process blur event or not
      this.isProcessBlur = function()
      {
        return !input.data('colorpicker-show');
      }

      // Save field into view
      this.saveField = function()
      {
        field.find(this.viewValuePattern).find('.value').css('background-color', '#' + this.getFieldFormattedValue());
      }

    }
  }
);
