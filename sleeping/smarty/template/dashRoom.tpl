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
			{foreach from=$room item=curr_room}
					<!-- Prezzo Descrizione Posti della camera -->
					<fieldset class="fieldsetWrapper" id="fieldsetDatiGeneraliCamera{$curr_room['ID']}">
						<legend>Dati Generali</legend>
						<span id="dashDataRoom">
							<span class="roomWrapper" id="{$curr_room['ID']}">
								<input type="hidden" class="roomID"  name="cameraID" value="{$curr_room['ID']}" />
								<span id="datiCamera"> 
									<span class="cellTable">
										<p>Posti: </p> <input class="postiCamera dashNoEditing" name="postiCamera" value="{$curr_room['posti']}" disabled="disabled" />
									</span>
									<span class="cellTable"> 
										<p >Descrizione: </p> <input type="text" class="descrizioneCamera dashNoEditing" name="descrizioneCamera" value="{$curr_room['descrizione']}" disabled="disabled" />
									</span>
									<span class="cellTable"> 
										<p >Prezzo:</p> <input class="prezzoCamera dashNoEditing" name="prezzoCamera" value="{$curr_room['prezzo']['value']}" disabled="disabled" />
									</span> 
								</span>
							</span> <!-- RoomWrapperEND -->
						</span>
					</fieldset>
			{/foreach}
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