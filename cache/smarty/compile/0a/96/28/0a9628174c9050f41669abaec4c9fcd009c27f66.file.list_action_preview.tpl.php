<?php /* Smarty version Smarty-3.1.19, created on 2017-04-16 13:50:52
         compiled from "/var/www/public/admin250gvzdem/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198169835758f34c8ce7f458-33842336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a9628174c9050f41669abaec4c9fcd009c27f66' => 
    array (
      0 => '/var/www/public/admin250gvzdem/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1489499358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198169835758f34c8ce7f458-33842336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58f34c8ce8cfd9_43560331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f34c8ce8cfd9_43560331')) {function content_58f34c8ce8cfd9_43560331($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
