<?php /* Smarty version Smarty-3.0.9, created on 2012-11-24 23:46:53
         compiled from "./sleeping/smarty/template/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139266236150b14e5d8e7793-29066974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25aefb48d077864152363afb0b045406314ca488' => 
    array (
      0 => './sleeping/smarty/template/news.tpl',
      1 => 1353487507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139266236150b14e5d8e7793-29066974',
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