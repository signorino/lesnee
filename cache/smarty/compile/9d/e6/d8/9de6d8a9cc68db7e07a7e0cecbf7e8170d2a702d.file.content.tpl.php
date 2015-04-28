<?php /* Smarty version Smarty-3.1.19, created on 2015-03-20 11:18:51
         compiled from "D:\wamp\www\www.lesnee.com\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15039550bf40bdb4643-07909164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9de6d8a9cc68db7e07a7e0cecbf7e8170d2a702d' => 
    array (
      0 => 'D:\\wamp\\www\\www.lesnee.com\\admin\\themes\\default\\template\\content.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15039550bf40bdb4643-07909164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550bf40be46e07_00002171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550bf40be46e07_00002171')) {function content_550bf40be46e07_00002171($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
