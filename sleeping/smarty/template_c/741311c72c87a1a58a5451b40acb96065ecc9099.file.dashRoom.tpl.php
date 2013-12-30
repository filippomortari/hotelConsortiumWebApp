<?php /* Smarty version Smarty-3.0.9, created on 2012-11-26 12:03:41
         compiled from "./sleeping/smarty/template/dashRoom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186497424250b34c8df3bca4-42111831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '741311c72c87a1a58a5451b40acb96065ecc9099' => 
    array (
      0 => './sleeping/smarty/template/dashRoom.tpl',
      1 => 1353927737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186497424250b34c8df3bca4-42111831',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="dashboardRoom">
	<div class="overlay"></div>
	<div class="dataWrapper">
		<!-- AGGIUNGI ALTRA CAMERA -->
		<p class="my-btn" id="aggiungiCamera">+ camera</p>
		<div id="addRoomWrapper"></div>
		<div class="editData">
			<img class="editDatiGeneraliRoom" src="./sleeping/public/img/ico_edit.png" />
			<img class="saveDatiGeneraliRoom" src="./sleeping/public/img/save.png" />
		</div>
		<div id="datiGeneraliRoomWrapper" class="dashLeft">
		<form id="editRoomForm">
			<?php  $_smarty_tpl->tpl_vars['curr_room'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('room')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['curr_room']->key => $_smarty_tpl->tpl_vars['curr_room']->value){
?>
					<!-- Prezzo Descrizione Posti della camera -->
					<fieldset class="fieldsetWrapper" id="fieldsetDatiGeneraliCamera<?php echo $_smarty_tpl->tpl_vars['curr_room']->value['ID'];?>
">
						<legend>Dati Generali</legend>
						<span id="dashDataRoom">
							<span class="roomWrapper" id="<?php echo $_smarty_tpl->tpl_vars['curr_room']->value['ID'];?>
">
								<input type="hidden" class="roomID"  name="cameraID" value="<?php echo $_smarty_tpl->tpl_vars['curr_room']->value['ID'];?>
" />
								<span id="datiCamera"> 
									<span class="cellTable">
										<p>Posti: </p> <input class="postiCamera dashNoEditing" name="postiCamera" value="<?php echo $_smarty_tpl->tpl_vars['curr_room']->value['posti'];?>
" disabled="disabled" />
									</span>
									<span class="cellTable"> 
										<p >Descrizione: </p> <input type="text" class="descrizioneCamera dashNoEditing" name="descrizioneCamera" value="<?php echo $_smarty_tpl->tpl_vars['curr_room']->value['descrizione'];?>
" disabled="disabled" />
									</span>
									<span class="cellTable"> 
										<p >Prezzo:</p> <input class="prezzoCamera dashNoEditing" name="prezzoCamera" value="<?php echo $_smarty_tpl->tpl_vars['curr_room']->value['prezzo']['value'];?>
" disabled="disabled" />
									</span> 
								</span>
							</span> <!-- RoomWrapperEND -->
						</span>
					</fieldset>
			<?php }} ?>
		</form>
			</div>
		</div>
	</div>	
	<div id="cameraMsg" title="salvataggio dati" style="display: none">
	    <p>
	    	cambiamenti registrati
	    </p>
	</div>
	<div id="cameraNoMsg" title="salvataggio dati" style="display: none">
	    <p>
	    	errore nel salvataggio
	    </p>
	</div>
<div class="clear_div">&nbsp;</div>