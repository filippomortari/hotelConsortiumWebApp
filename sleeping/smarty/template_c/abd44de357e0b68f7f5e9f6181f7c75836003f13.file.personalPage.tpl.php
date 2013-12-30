<?php /* Smarty version Smarty-3.0.9, created on 2012-11-26 10:44:25
         compiled from "./sleeping/smarty/template/personalPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199727330750b339f9037ed8-97550234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abd44de357e0b68f7f5e9f6181f7c75836003f13' => 
    array (
      0 => './sleeping/smarty/template/personalPage.tpl',
      1 => 1353922939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199727330750b339f9037ed8-97550234',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="dataWrapper">
<input type="hidden" id="check-in" value="<?php echo $_smarty_tpl->getVariable('checkIn')->value;?>
" />
<input type="hidden" id="check-out" value="<?php echo $_smarty_tpl->getVariable('checkOut')->value;?>
" />
	<div id="headerWrapper">
		<div id="logo">
			<img src="<?php echo $_smarty_tpl->getVariable('logo')->value;?>
" />
		</div>
		<div id="datiGenerali">
			<div id="nomeStruttura">
				<h1><?php echo $_smarty_tpl->getVariable('struttura')->value['nome'];?>
</h1>
			</div>
			<div id="datiStruttura">
				<span id="datiContatto">
					<p class="label">tel: <?php echo $_smarty_tpl->getVariable('struttura')->value['contatti']['telefono'];?>
</p>
					<p class="label">cel: <?php echo $_smarty_tpl->getVariable('struttura')->value['contatti']['mobile'];?>
</p>
					<p class="label">fax: <?php echo $_smarty_tpl->getVariable('struttura')->value['contatti']['fax'];?>
</p>
					<p class="label">mail: <?php echo $_smarty_tpl->getVariable('struttura')->value['contatti']['email'];?>
</p>
				</span>
				<span id="datiIndirizzo">
					<p class="label">via: <?php echo $_smarty_tpl->getVariable('struttura')->value['sedeLegale']['via'];?>
, <?php echo $_smarty_tpl->getVariable('struttura')->value['sedeLegale']['numCiv'];?>
</p>
					<p class="label">citt&agrave;: <?php echo $_smarty_tpl->getVariable('struttura')->value['sedeLegale']['citta'];?>
</p>
				</span>
			</div>
		</div>
	</div> 
	
	<div id="gallery">
		<h2>Foto Gallery</h2>
		<?php  $_smarty_tpl->tpl_vars['foto'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fotoGallery')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['foto']->key => $_smarty_tpl->tpl_vars['foto']->value){
?>
			<span class="fotoWrapper">
				<img class="fotoGallery" src="<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
" />
			</span>
		<?php }} ?>
	</div>
	
	<div class="clear">&nbsp;</div>
	
	<div id="camere">
		<h2>Camere</h2>
	
		<?php  $_smarty_tpl->tpl_vars['camera'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('camere')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['camera']->key => $_smarty_tpl->tpl_vars['camera']->value){
?>
			<div class="datiCameraWrapper">
				<form id="cameraSelezionata">
					<div class="checkBox">
						<input type="radio" name="camera" value="<?php echo $_smarty_tpl->tpl_vars['camera']->value['ID'];?>
" />
					</div>
					<div class="datiCamera">
						<p class="label">Posti:</p> <p class="value"><?php echo $_smarty_tpl->tpl_vars['camera']->value['posti'];?>
</p>
						<p class="label">Descrizione:</p> <p class="value"><?php echo $_smarty_tpl->tpl_vars['camera']->value['descrizione'];?>
</p>
						<p class="label">Prezzo:</p> <p class="value"><?php echo $_smarty_tpl->tpl_vars['camera']->value['prezzo']['value'];?>
</p>
					</div>
				</form>
			</div>
		<?php }} ?>
	
	</div>
	
	<p class="my-btn" id="prenota"> Prenota </p>
	<div id="prenotazioneMsg" title="date errate" style="display: none">
	    <p>
	    	Prenotazione effettuata con successo
	    </p>
	</div>
	<div id="prenotazioneNoMsg" title="date errate" style="display: none">
	    <p>
	    	Prenotazione non andata a buon fine
	    </p>
	</div>
</div>