<?php /* Smarty version Smarty-3.0.9, created on 2012-11-21 09:45:12
         compiled from "smarty/template/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30356287450ac9498eb0245-82899932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd136cb40cfb9ae8e076e3cb587de2346c31227ad' => 
    array (
      0 => 'smarty/template/news.tpl',
      1 => 1353487507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30356287450ac9498eb0245-82899932',
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