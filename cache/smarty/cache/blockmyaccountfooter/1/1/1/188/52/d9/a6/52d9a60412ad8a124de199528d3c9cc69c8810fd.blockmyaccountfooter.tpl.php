<?php /*%%SmartyHeaderCode:41268554858f33862a27ef2-45692100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52d9a60412ad8a124de199528d3c9cc69c8810fd' => 
    array (
      0 => '/var/www/public/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1489499358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41268554858f33862a27ef2-45692100',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58f33862b0fdc2_52344457',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f33862b0fdc2_52344457')) {function content_58f33862b0fdc2_52344457($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://192.168.33.10/en/my-account" title="Manage my customer account" rel="nofollow">My account</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://192.168.33.10/en/order-history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://192.168.33.10/en/credit-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://192.168.33.10/en/addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://192.168.33.10/en/identity" title="Manage my personal information" rel="nofollow">My personal info</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
