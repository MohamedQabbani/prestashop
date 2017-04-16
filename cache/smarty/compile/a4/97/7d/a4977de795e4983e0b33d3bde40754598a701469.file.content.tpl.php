<?php /* Smarty version Smarty-3.1.19, created on 2017-04-16 12:25:13
         compiled from "/var/www/public/admin250gvzdem/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2523725858f33879acf152-14653680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4977de795e4983e0b33d3bde40754598a701469' => 
    array (
      0 => '/var/www/public/admin250gvzdem/themes/default/template/content.tpl',
      1 => 1489499358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2523725858f33879acf152-14653680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58f33879adb925_80340341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f33879adb925_80340341')) {function content_58f33879adb925_80340341($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
