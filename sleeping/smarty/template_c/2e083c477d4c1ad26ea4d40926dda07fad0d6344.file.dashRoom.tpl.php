<?php /* Smarty version Smarty-3.0.9, created on 2012-11-24 19:42:50
         compiled from "./smarty/template/dashRoom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18390403250b1152a877de9-60119799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e083c477d4c1ad26ea4d40926dda07fad0d6344' => 
    array (
      0 => './smarty/template/dashRoom.tpl',
      1 => 1353708640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18390403250b1152a877de9-60119799',
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
		<div id="datiGeneraliRoomWrapper" class="dashLeft">
			<?php  $_smarty_tpl->tpl_vars['curr_room'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('room')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['curr_room']->key => $_smarty_tpl->tpl_vars['curr_room']->value){
?>
				<fieldset class="fieldsetWrapper" id="fieldsetCamera">
					<legend>Camera</legend>
					<!-- Prezzo Descrizione Posti della camera -->
					<fieldset class="fieldsetWrapper" id="fieldsetDatiGeneraliCamera">
						<legend>Dati Generali</legend>
						<div class="editData">
							<img id="editDatiGeneraliRoom" src="public/img/ico_edit.png" /> 
						</div>
						<div id="dashDataRoom">
							<div class="roomWrapper">
								<span id="datiCamera"> 
									<span class="cellTable">
										<label for="" class="cellLabel my-btn" id="postiCamera"><p>Posti</p></label>
									</span>
									<span class="cellTable"> 
										<label id="descrizioneCamera" for="" class="cellLabel my-btn"><p>Descrizione</p></label>
										<!-- <input type="text" id="nome" class="dashNoEditing" value="<?php echo $_smarty_tpl->tpl_vars['curr_room']->value['descrizione'];?>
" disabled="disabled" /> -->
									</span>
									<span class="cellTable"> 
										<label for="" class="cellLabel my-btn" id="prezzoCamera"><p>Prezzo</p></label>
									</span> 
								</span>
							</div> <!-- RoomWrapperEND -->
							<div class="lastLine">
								<span class="labelSaveData"> 
									<span class="lineHidden">Ora puoi modificare i dati</span>
								</span> 
								<span class="cellBtn"> <span class="editBtn">
										<p class="editDatiBtnRoom my-btn" id="editDatiGeneraliRoom">Edit data</p>
								</span> 
								<span class="saveBtn">
										<p class="editDatiBtnRoom my-btn" id="saveDatiGeneraliRoom">Salva</p>
								</span>
								</span>
							</div>
					</fieldset>
					<fieldset class="fieldsetWrapper" id="fieldsetDatiGeneraliFoto">
						<legend>Foto</legend>
						<div id="dashRoomFotoGallery">
							<?php $_template = new Smarty_Internal_Template("./private/html/photoManager.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
						</div>
						<div class="lastLine">
							<span class="labelSaveData"> <span class="lineHidden">Ora
									puoi modificare i dati</span>
							</span> <span class="cellBtn"> <span class="editBtn">
									<p class="editDatiBtnRoom my-btn" id="editContact">Edit data</p>
							</span> <span class="saveBtn">
									<p class="editDatiBtnRoom my-btn" id="saveContactHotel">Salva</p>
							</span>
							</span>
						</div>
					</fieldset>
					<!-- Foto della camera -->
					<div id="foto" class="dashRight">
					<div id="testoPopUp">	
						<p>prova contenuti nascosti</p>
						<p class="chiudi">X</p>
					</div>
				</fieldset>
			<?php }} ?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function() {
	$('#descrizioneCamera').click(function() {
		$('.overlay').fadeIn('fast');
		$('#testoPopUp').css("display","block");
		$('#testoPopUp').fadeIn('slow');
	});

	$(".chiudi").click(function() {
		$('.overlay').fadeOut('fast');
		$('#testoPopUp').hide();
	});

	// chiusura emergenza
	$(".overlay").click(function() {
		$(this).fadeOut('fast');
		$('#testoPopUp').hide();
	});

});
</script>
<script type="text/javascript">
$(function() {
	$('#prezzoCamera').click(function() {
		$('.overlay').fadeIn('fast');
		$('#testoPopUp').css("display","block");
		$('#testoPopUp').fadeIn('slow');
	});

	$(".chiudi").click(function() {
		$('.overlay').fadeOut('fast');
		$('#testoPopUp').hide();
	});

	// chiusura emergenza
	$(".overlay").click(function() {
		$(this).fadeOut('fast');
		$('#testoPopUp').hide();
	});

});
</script>
<script type="text/javascript">
$(function() {
	$('#postiCamera').click(function() {
		$('.overlay').fadeIn('fast');
		$('#testoPopUp').css("display","block");
		$('#testoPopUp').fadeIn('slow');
	});

	$(".chiudi").click(function() {
		$('.overlay').fadeOut('fast');
		$('#testoPopUp').hide();
	});

	// chiusura emergenza
	$(".overlay").click(function() {
		$(this).fadeOut('fast');
		$('#testoPopUp').hide();
	});

});
</script>
<<script type="text/javascript">
	$(".chiudi").click(function() {
		$('.overlay').fadeOut('fast');
		$('#addRoomWrapper').hide();
	});
	
	// chiusura emergenza
	$(".overlay").click(function() {
		$(this).fadeOut('fast');
		$('#addRoomWrapper').hide();
});
</script>

<div class="clear_div">&nbsp;</div>