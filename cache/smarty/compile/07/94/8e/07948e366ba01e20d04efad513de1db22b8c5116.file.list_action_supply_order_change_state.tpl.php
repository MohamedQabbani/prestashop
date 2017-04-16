<?php /* Smarty version Smarty-3.1.19, created on 2017-04-16 09:17:45
         compiled from "/var/www/public/admin/themes/default/template/helpers/list/list_action_supply_order_change_state.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169137159558f336b9b60b12-36326343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07948e366ba01e20d04efad513de1db22b8c5116' => 
    array (
      0 => '/var/www/public/admin/themes/default/template/helpers/list/list_action_supply_order_change_state.tpl',
      1 => 1489499358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169137159558f336b9b60b12-36326343',
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
  'unifunc' => 'content_58f336b9bb4839_65567812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f336b9bb4839_65567812')) {function content_58f336b9bb4839_65567812($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-time"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
