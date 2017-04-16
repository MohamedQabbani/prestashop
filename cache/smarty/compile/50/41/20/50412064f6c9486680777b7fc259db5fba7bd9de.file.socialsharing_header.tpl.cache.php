<?php /* Smarty version Smarty-3.1.19, created on 2017-04-16 14:25:01
         compiled from "/var/www/public/modules/socialsharing/views/templates/hook/socialsharing_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185226682658f3548d3ccf55-97720105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50412064f6c9486680777b7fc259db5fba7bd9de' => 
    array (
      0 => '/var/www/public/modules/socialsharing/views/templates/hook/socialsharing_header.tpl',
      1 => 1489499358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185226682658f3548d3ccf55-97720105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
    'meta_description' => 0,
    'link_rewrite' => 0,
    'cover' => 0,
    'link' => 0,
    'pretax_price' => 0,
    'currency' => 0,
    'price' => 0,
    'weight' => 0,
    'weight_unit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58f3548d4df142_31655194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f3548d4df142_31655194')) {function content_58f3548d4df142_31655194($_smarty_tpl) {?>
<meta property="og:type" content="product" />
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['request']->value;?>
" />
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['link_rewrite']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value['id_image'])) {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['link_rewrite']->value,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['pretax_price']->value)) {?>
<meta property="product:pretax_price:amount" content="<?php echo $_smarty_tpl->tpl_vars['pretax_price']->value;?>
" />
<?php }?>
<meta property="product:pretax_price:currency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['price']->value)) {?>
<meta property="product:price:amount" content="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" />
<?php }?>
<meta property="product:price:currency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['weight']->value)&&($_smarty_tpl->tpl_vars['weight']->value!=0)) {?>
<meta property="product:weight:value" content="<?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
" />
<meta property="product:weight:units" content="<?php echo $_smarty_tpl->tpl_vars['weight_unit']->value;?>
" />
<?php }?>
<?php }} ?>
