<?php /* Smarty version Smarty-3.0.9, created on 2012-11-25 15:49:07
         compiled from "./sleeping/smarty/template/hotelFind.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208228534450b22fe3718697-05335734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1da6b3e22be9efa10f43c8f74e6bfd8b629aa4e7' => 
    array (
      0 => './sleeping/smarty/template/hotelFind.tpl',
      1 => 1353854645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208228534450b22fe3718697-05335734',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="hotelsWrapper">
<?php  $_smarty_tpl->tpl_vars['struttura'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['struttura']->key => $_smarty_tpl->tpl_vars['struttura']->value){
?>
	<fieldset class="fieldSetHotel">
		<div class="infoWrapper">
			<div class="infoHeader">
				<div class="logo">
					<img src="<?php echo $_smarty_tpl->tpl_vars['struttura']->value['logo'];?>
" />
				</div>
				<div class="nomeHotel">
					<h1 class="gotToHotelPage"><?php echo $_smarty_tpl->tpl_vars['struttura']->value['nome'];?>
</h1>
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['struttura']->value['ID'];?>
" />
				</div>
				<div class="stelle">
					<span>
					<?php $_smarty_tpl->tpl_vars['stelle'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['stelle']->step = 1;$_smarty_tpl->tpl_vars['stelle']->total = (int)ceil(($_smarty_tpl->tpl_vars['stelle']->step > 0 ? $_smarty_tpl->tpl_vars['struttura']->value['stelle']+1 - (1) : 1-($_smarty_tpl->tpl_vars['struttura']->value['stelle'])+1)/abs($_smarty_tpl->tpl_vars['stelle']->step));
if ($_smarty_tpl->tpl_vars['stelle']->total > 0){
for ($_smarty_tpl->tpl_vars['stelle']->value = 1, $_smarty_tpl->tpl_vars['stelle']->iteration = 1;$_smarty_tpl->tpl_vars['stelle']->iteration <= $_smarty_tpl->tpl_vars['stelle']->total;$_smarty_tpl->tpl_vars['stelle']->value += $_smarty_tpl->tpl_vars['stelle']->step, $_smarty_tpl->tpl_vars['stelle']->iteration++){
$_smarty_tpl->tpl_vars['stelle']->first = $_smarty_tpl->tpl_vars['stelle']->iteration == 1;$_smarty_tpl->tpl_vars['stelle']->last = $_smarty_tpl->tpl_vars['stelle']->iteration == $_smarty_tpl->tpl_vars['stelle']->total;?>
						<img src="./sleeping/public/img/starHotelGreen.png" />
					<?php }} ?>
					</span>
				</div>
			</div>
			<div class="datiWrapper">
				<div class="datiIndirizzo">
					<p class="dataLabel">Via:</p> <p> <?php echo $_smarty_tpl->tpl_vars['struttura']->value['sedeLegale']['via'];?>
</p>
					<p class="dataLabel">Numero Civico:</p> <p> <?php echo $_smarty_tpl->tpl_vars['struttura']->value['sedeLegale']['numCiv'];?>
</p>
					<p class="dataLabel">Citta:</p> <p> <?php echo $_smarty_tpl->tpl_vars['struttura']->value['sedeLegale']['citta'];?>
</p>
				</div>
				<div class="datiContatto">
					<p class="dataLabel">Telefono:</p> <p> <?php echo $_smarty_tpl->tpl_vars['struttura']->value['contatti']['telefono'];?>
</p>
					<p class="dataLabel">Cellulare:</p> <p> <?php echo $_smarty_tpl->tpl_vars['struttura']->value['contatti']['mobile'];?>
</p>
					<p class="dataLabel">Fax:</p> <p> <?php echo $_smarty_tpl->tpl_vars['struttura']->value['contatti']['fax'];?>
</p>
					<p class="dataLabel">Email:</p> <p> <?php echo $_smarty_tpl->tpl_vars['struttura']->value['contatti']['email'];?>
</p>
				</div>
				<div class="datiFiscaliWrapper">
					<p class="dataLabel">Codice Fiscale:</p> <p> <?php echo $_smarty_tpl->tpl_vars['struttura']->value['cf'];?>
</p>
					<p class="dataLabel">Partita Iva:</p> <p> <?php echo $_smarty_tpl->tpl_vars['struttura']->value['pIva'];?>
</p> 
				</div>
			</div>
		</div>
	</fieldset>
<?php }} ?>
</div>
<div id="loadScript">
	<script type="text/javascript">
		$(function() {
			$("#tabs").tabs();
			// fix the classes
			$(".tabs-bottom .ui-tabs-nav, .tabs-bottom .ui-tabs-nav > *").removeClass(
					"ui-corner-all ui-corner-top").addClass("ui-corner-bottom");
			// move the nav to the bottom
			$(".tabs-bottom .ui-tabs-nav").appendTo(".tabs-bottom");
		});
	</script>

</div>