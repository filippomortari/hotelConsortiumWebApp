<?php /* Smarty version Smarty-3.0.9, created on 2012-11-25 10:53:10
         compiled from "./sleeping/smarty/template/hotelsTpl.html" */ ?>
<?php /*%%SmartyHeaderCode:17969071650b1ea8602ee58-67941195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ee6928a09a929c6c20b592563d85b3479b89ec1' => 
    array (
      0 => './sleeping/smarty/template/hotelsTpl.html',
      1 => 1353837177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17969071650b1ea8602ee58-67941195',
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
		<legend>Nome Hotel</legend>
		<div class="infoWrapper">
			<div class="logo">
				<img src="<?php echo $_smarty_tpl->tpl_vars['struttura']->value['logo'];?>
" />
			</div>
			<div class="nomeHotel">
				<h1><?php echo $_smarty_tpl->tpl_vars['struttura']->value['nome'];?>
</h1>
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
				<div class="datiFiscaliWrapper">
					<div class="codFisc">
						<h2><?php echo $_smarty_tpl->tpl_vars['struttura']->value['cf'];?>
</h2>
					</div>
					
					<div class="pIva">
						<h2><?php echo $_smarty_tpl->tpl_vars['struttura']->value['pIva'];?>
</h2> 
					</div>
				</div>
			</div>
		</div>
		<div class="roomWrapper">
	 		<div id="tabs" class="tabs-bottom">
			    <ul>
			        <li><a href="#tabs-1">Descrizione camera</a></li>
			        <li><a href="#tabs-2">Foto Gallery</a></li>
			        <li><a href="#tabs-3">Prenota</a></li>
			    </ul>
			    <div class="tabs-spacer"></div>
			    <div id="tabs-1">
			       <p> 
				       <span class="room">
					       <?php  $_smarty_tpl->tpl_vars['room'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['struttura']->value['room']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['room']->key => $_smarty_tpl->tpl_vars['room']->value){
?>
						       	<span class="postiLetto tableRow">
					 				<label class="tableCell">Posti letto: </label>
					 				<input class="tableCell" type="text" value="<?php echo $_smarty_tpl->tpl_vars['room']->value['posti'];?>
" disabled="disabled" size="3"/>
					 			</span>
					 			<span class="prezzoCamera tableRow">
					 				<label class="tableCell">Prezzo: </label>
					 				<input class="tableCell" type="text" 
					 					value="<?php echo $_smarty_tpl->tpl_vars['room']->value['prezzo']['value'];?>
 €" 
					 					disabled="disabled" size="6"/>
					 			</span>
					 			<span class="descRoom tableRow">
					 				<label class="tableCell">Descrizione:</label>
					 				<textarea class="tableCell" rows="" cols="" disabled="disabled" ><?php echo $_smarty_tpl->tpl_vars['room']->value['descrizione'];?>
</textarea>
					 			</span>
				 			<?php }} ?>
				 		</span> 
			 		</p>
			    </div>
			    <div id="tabs-2">
			        <p>
			        	<div id="main">
							<div id="page-wrap">
									<!-- AnythingSlider #1 -->
									<ul id="slider1 slideFotoHotel">
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
									</ul>  
									<!-- END AnythingSlider #1 -->
							</div>
						</div>
					</p>
			    </div>
			    <div id="tabs-3">
			        <p>
						c'è da inserire il modulo per la prenotazione. Per motivo di tempo non è stato ancora sviluppato
						basta realizzare una classe nel pacchetto operation che si occupi della gestione.			        
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