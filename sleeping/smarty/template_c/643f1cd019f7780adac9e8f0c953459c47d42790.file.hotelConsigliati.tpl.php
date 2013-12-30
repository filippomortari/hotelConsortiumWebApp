<?php /* Smarty version Smarty-3.0.9, created on 2012-11-24 23:37:59
         compiled from "./sleeping/smarty/template/hotelConsigliati.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119994213450b14c47040c09-02434132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '643f1cd019f7780adac9e8f0c953459c47d42790' => 
    array (
      0 => './sleeping/smarty/template/hotelConsigliati.tpl',
      1 => 1353492211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119994213450b14c47040c09-02434132',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="hotelConsigliati">
	<?php  $_smarty_tpl->tpl_vars['hotel'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hotels')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['hotel']->key => $_smarty_tpl->tpl_vars['hotel']->value){
?>
		<div class="hotelWrapper">
			<h2 class="nomeHotelHome">
				<?php echo $_smarty_tpl->tpl_vars['hotel']->value['nomeHotel'];?>

			</h2>
			<p class="descrizioneHotelHome">
				<?php echo $_smarty_tpl->tpl_vars['hotel']->value['descrizioneHotel'];?>

			</p>
		</div>
	<?php }} ?>
</div>