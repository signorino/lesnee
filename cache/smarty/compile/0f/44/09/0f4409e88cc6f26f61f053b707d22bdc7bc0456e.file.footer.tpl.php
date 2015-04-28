<?php /* Smarty version Smarty-3.1.19, created on 2015-04-23 00:20:14
         compiled from "D:\wamp\www\www.lesnee.com\themes\default-bootstrap\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15571550bf415974801-12628646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f4409e88cc6f26f61f053b707d22bdc7bc0456e' => 
    array (
      0 => 'D:\\wamp\\www\\www.lesnee.com\\themes\\default-bootstrap\\footer.tpl',
      1 => 1429719609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15571550bf415974801-12628646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550bf415a7e208_05499872',
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550bf415a7e208_05499872')) {function content_550bf415a7e208_05499872($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
					</footer>
				<div id="powerby" class="footer-last-container">				
             	  <section class="bottom-footer col-xs-12">
             	    <div class="f-left"><a href="#">Home</a></div>
	             	<div class="f-right">
			           &copy; 2014 <?php echo smartyTranslate(array('s'=>'[1]Ecommerce software by %s[/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

	                </div>
	              </section>
	             </div>
				</div><!-- #footer -->
			<?php }?>
	
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
