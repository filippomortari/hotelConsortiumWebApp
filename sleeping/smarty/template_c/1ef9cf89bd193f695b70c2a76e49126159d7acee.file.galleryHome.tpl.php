<?php /* Smarty version Smarty-3.0.9, created on 2012-11-24 17:00:57
         compiled from "./smarty/template/galleryHome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105321045450b0ef394fd960-12421863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ef9cf89bd193f695b70c2a76e49126159d7acee' => 
    array (
      0 => './smarty/template/galleryHome.tpl',
      1 => 1353757496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105321045450b0ef394fd960-12421863',
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