<?php /* Smarty version Smarty-3.0.9, created on 2012-11-24 23:37:59
         compiled from "./sleeping/smarty/template/galleryHome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77293296250b14c470209b0-36932614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8079250d01d5d79e158e1d64cfc1c7fd79b05163' => 
    array (
      0 => './sleeping/smarty/template/galleryHome.tpl',
      1 => 1353757496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77293296250b14c470209b0-36932614',
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