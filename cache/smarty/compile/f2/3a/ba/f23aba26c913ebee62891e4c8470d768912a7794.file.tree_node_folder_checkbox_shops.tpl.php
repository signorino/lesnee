<?php /* Smarty version Smarty-3.1.19, created on 2015-03-20 11:22:12
         compiled from "D:\wamp\www\www.lesnee.com\admin\themes\default\template\helpers\tree\tree_node_folder_checkbox_shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22310550bf4d4876982-27851627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f23aba26c913ebee62891e4c8470d768912a7794' => 
    array (
      0 => 'D:\\wamp\\www\\www.lesnee.com\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder_checkbox_shops.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22310550bf4d4876982-27851627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'table' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550bf4d4d41283_56769528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550bf4d4d41283_56769528')) {function content_550bf4d4d41283_56769528($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<input type="checkbox" name="checkBoxShopGroupAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo smartyTranslate(array('s'=>'Group: %s','sprintf'=>$_smarty_tpl->tpl_vars['node']->value['name']),$_smarty_tpl);?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>
