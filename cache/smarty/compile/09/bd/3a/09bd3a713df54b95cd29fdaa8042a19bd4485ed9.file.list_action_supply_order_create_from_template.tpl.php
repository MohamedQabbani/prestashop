<?php /* Smarty version Smarty-3.1.19, created on 2017-04-16 09:17:44
         compiled from "/var/www/public/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104539920458f336b83dbe92-59800091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09bd3a713df54b95cd29fdaa8042a19bd4485ed9' => 
    array (
      0 => '/var/www/public/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl',
      1 => 1489499358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104539920458f336b83dbe92-59800091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58f336b84087c7_52397090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f336b84087c7_52397090')) {function content_58f336b84087c7_52397090($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
