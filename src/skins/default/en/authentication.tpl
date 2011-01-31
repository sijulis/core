{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * ____file_title____
 *  
 * @author    Creative Development LLC <info@cdev.ru> 
 * @copyright Copyright (c) 2011 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @version   GIT: $Id$
 * @link      http://www.litecommerce.com/
 * @since     3.0.0
 *}

{* Login error page *}
If you already have an account, you can authenticate yourself by filling in the form below. The fields which are marked with <font class="Star">*</font> are mandatory.

<hr size="1" noshade>

<widget class="\XLite\View\Form\Login\Customer\Main" name="login_form" />

<table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr>
    <td width="78" class="SidebarItems">E-mail</td>
    <td width="10" class="Star">*</td>
    <td>
        <input type="text" name="login" value="{login:r}" size="30" maxlength="128">
    </td>
</tr>
<tr>
    <td class="SidebarItems">Password</td>
    <td class="Star">*</td>
    <td>
        <input type="password" name="password" value="" size="30" maxlength="128">
    </td>
</tr>
<tr IF="!valid">
    <td colspan="2">&nbsp;</td>
    <td>
    <span class="ValidateErrorMessage">Invalid login or password</span>&nbsp;&nbsp;&nbsp;<a href="{buildURL(#recover_password#)}"><u>Forgot password?</u></a>
    </td>
</tr>
<tr>
    <td colspan="2">&nbsp;</td>
    <td>
        <widget class="\XLite\View\Button\Submit" />
    </td>
</tr>
</table>

<br>
<br>

If you do not have an account, you can easily <a href="{buildURL(#profile#,##,_ARRAY_(#mode#^#register#))}" class="SidebarItems"><u>register here</u></a>

<widget name="login_form" end />

