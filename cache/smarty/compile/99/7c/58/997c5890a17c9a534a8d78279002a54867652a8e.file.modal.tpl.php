<?php /* Smarty version Smarty-3.1.19, created on 2017-04-16 09:17:47
         compiled from "/var/www/public/admin/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172324663858f336bb97ea57-80056561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '997c5890a17c9a534a8d78279002a54867652a8e' => 
    array (
      0 => '/var/www/public/admin/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1489499358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172324663858f336bb97ea57-80056561',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58f336bb9a4650_46191308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f336bb9a4650_46191308')) {function content_58f336bb9a4650_46191308($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
