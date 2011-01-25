{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Display horizontal minicart item price
 *  
 * @author    Creative Development LLC <info@cdev.ru> 
 * @copyright Copyright (c) 2011 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @version   SVN: $Id$
 * @link      http://www.litecommerce.com/
 * @since     3.0.0
 * @ListChild (list="minicart.horizontal.item", weight="20")
 *}
<div class="item-price">{item.getPrice():p} x {item.getAmount()}</div>
