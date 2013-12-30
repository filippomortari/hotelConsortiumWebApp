<?php /* Smarty version Smarty-3.0.9, created on 2012-11-24 17:00:57
         compiled from "./smarty/template/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15226520850b0ef39517f94-88340936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db09ba3b23aa14403392925cb906b159575a38e4' => 
    array (
      0 => './smarty/template/news.tpl',
      1 => 1353487507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15226520850b0ef39517f94-88340936',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<li>
	<div id="news">
		<?php  $_smarty_tpl->tpl_vars['notizia'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['notizia']->key => $_smarty_tpl->tpl_vars['notizia']->value){
?>
			<div class="notizia">
				<h2 class="titolo"><?php echo $_smarty_tpl->tpl_vars['notizia']->value['titolo'];?>
</h2>
				<p class="testo">
					<?php echo $_smarty_tpl->tpl_vars['notizia']->value['testo'];?>

				</p>
			</div>
		<?php }} ?>
	</div>
</li>