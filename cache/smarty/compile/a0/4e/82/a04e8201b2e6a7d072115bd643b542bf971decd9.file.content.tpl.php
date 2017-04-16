<?php /* Smarty version Smarty-3.1.19, created on 2017-04-16 09:17:28
         compiled from "/var/www/public/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102933705858f336a8a65765-64295761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a04e8201b2e6a7d072115bd643b542bf971decd9' => 
    array (
      0 => '/var/www/public/admin/themes/default/template/content.tpl',
      1 => 1489499358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102933705858f336a8a65765-64295761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58f336a8afde75_34098283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f336a8afde75_34098283')) {function content_58f336a8afde75_34098283($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
