<?php /* Smarty version Smarty-3.1.19, created on 2017-04-16 09:17:37
         compiled from "/var/www/public/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177201921458f336b14f8440-79397426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '148261a38de856f7ca39f90de59e89f03f7da927' => 
    array (
      0 => '/var/www/public/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1489499358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177201921458f336b14f8440-79397426',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58f336b1507713_28720772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f336b1507713_28720772')) {function content_58f336b1507713_28720772($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
