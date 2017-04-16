<?php /*%%SmartyHeaderCode:127828926758f35495e60175-57704783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce86eda06ec4d3df0021a4fd065705d8dbc6bef9' => 
    array (
      0 => '/var/www/public/modules/socialsharing/views/templates/hook/socialsharing.tpl',
      1 => 1489499358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127828926758f35495e60175-57704783',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58f35495ed2c93_79481290',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f35495ed2c93_79481290')) {function content_58f35495ed2c93_79481290($_smarty_tpl) {?>
	<p class="socialsharing_product list-inline no-print">
					<button data-type="twitter" type="button" class="btn btn-default btn-twitter social-sharing">
				<i class="icon-twitter"></i> Tweet
				<!-- <img src="http://192.168.33.10/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button data-type="facebook" type="button" class="btn btn-default btn-facebook social-sharing">
				<i class="icon-facebook"></i> Share
				<!-- <img src="http://192.168.33.10/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button data-type="google-plus" type="button" class="btn btn-default btn-google-plus social-sharing">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="http://192.168.33.10/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
							<button data-type="pinterest" type="button" class="btn btn-default btn-pinterest social-sharing">
				<i class="icon-pinterest"></i> Pinterest
				<!-- <img src="http://192.168.33.10/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
			</button>
			</p>
<?php }} ?>
