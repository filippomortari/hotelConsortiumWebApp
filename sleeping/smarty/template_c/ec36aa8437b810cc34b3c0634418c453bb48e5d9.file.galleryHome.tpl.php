<?php /* Smarty version Smarty-3.0.9, created on 2012-11-24 12:44:59
         compiled from "smarty/template/galleryHome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98189669650b0b33b176210-60872050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec36aa8437b810cc34b3c0634418c453bb48e5d9' => 
    array (
      0 => 'smarty/template/galleryHome.tpl',
      1 => 1353757496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98189669650b0b33b176210-60872050',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="gallery">
	<!-- SLIDER -->
	<div id="main">
		<div id="page-wrap">
			<!-- AnythingSlider #1 -->
			<ul id="slider1">
			<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('foto')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
?>
				<li><img src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" alt=""></li>
			<?php }} ?>
			</ul>
			<!-- END AnythingSlider #1 -->
		</div>
	</div>
</div>