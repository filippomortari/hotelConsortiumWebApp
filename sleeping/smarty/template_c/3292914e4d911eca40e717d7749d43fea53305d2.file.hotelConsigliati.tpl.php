<?php /* Smarty version Smarty-3.0.9, created on 2012-11-24 17:00:57
         compiled from "./smarty/template/hotelConsigliati.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86249626450b0ef395099b1-52994252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3292914e4d911eca40e717d7749d43fea53305d2' => 
    array (
      0 => './smarty/template/hotelConsigliati.tpl',
      1 => 1353492211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86249626450b0ef395099b1-52994252',
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