<div id="dashboard">
	<div id="photoWrapper">
		<fieldset>
			<legend>Foto</legend>
			<div id="dashPhoto">
				<div id="showimg"> 
					<img src={$foto} />
				</div>
				<span id="fotoName">logo della tua azienda</span>
			</div>
			<div id="changePhoto">
				{include file="./sleeping/private/html/fileUploadLogo.html"}
			</div>
		</fieldset>
	</div>
	<div class="dataWrapper">
		<div id="datiGenerali" class="dashLeft">
			<fieldset class="fieldsetWrapper">
				<legend>Dati Generali</legend>
				<div id="dashData">
					<span class="rowTable"> 
						<label for="" class="cellLabel">Nome:</label>
						<input type="text" id="nome" class="dashNoEditing" value="{$struttura['nome']}" disabled="disabled" />
					</span>
					<span class="rowTable"> 
						<label for="" class="cellLabel">Partita Iva:</label>
						<input type="text" id="pIva" class="dashNoEditing" value="{$struttura['pIva']}" disabled="disabled" />
					</span> 
					<span class="rowTable"> 
						<label for="" class="cellLabel">Codice Fiscale:</label>
						<input type="text" id="cf" class="dashNoEditing" value="{$struttura['cf']}" disabled="disabled" />
					</span> 
					<!-- CONTROLLO SE HOTEL SE B&B CAMPI NON PRESENTI -->
					{if $struttura['Discriminator'] eq "EHotel"}
						<span class="rowTable"> 
							<label for="" class="cellLabel">Stelle:</label> 
							<input type="text" id="stelle" class="dashNoEditing" value="{$struttura['stelle']}" disabled="disabled" />
						</span> 
						<span class="rowTable"> 
							<label for="" class="cellLabel">Catena:</label>
							<input type="text" name="catena" id="catena" class="dashEditing" vaue="{$struttura['catena']}" disabled="disabled" />
						</span> 
					{/if}
				</div>
				<div class="lastLine">
					<span class="labelSaveData"> 
						<span class="lineHidden">Ora puoi modificare i dati</span>
					</span> 
					<span class="cellBtn"> <span class="editBtn">
							<p class="editDataBtn my-btn" id="editDatiGeneraliHotel">Edit data</p>
					</span> 
					<span class="saveBtn">
							<p class="editDataBtn my-btn" id="saveDatiGeneraliHotel">Salva</p>
					</span>
					</span>
				</div>
			</fieldset>
		</div>
		<div id="contatto" class="dashRight">
			<fieldset class="fieldsetWrapper">
				<legend>Dati Contatto</legend>
				<div id="dashDataContacts">
					<span class="rowTable"> <label for="" class="cellLabel">Telefono:</label>
						<input type="text" id="phoneNumber" class="dashNoEditing"
						value="{$contatti['telefono']}" disabled="disabled" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">Cellulare:</label>
						<input type="text" id="mobilePhone" class="dashNoEditing"
						value="{$contatti['mobile']}" disabled="disabled" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">Fax:</label>
						<input type="text" id="faxNumber" class="dashNoEditing"
						value="{$contatti['fax']}" disabled="disabled" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">E-Mail:</label>
						<input type="text" id="email" class="dashNoEditing"
						value="{$contatti['email']}" disabled="disabled" />
					</span>
				</div>
				<div class="lastLine">
					<span class="labelSaveData"> <span class="lineHidden">Ora
							puoi modificare i dati</span>
					</span> <span class="cellBtn"> <span class="editBtn">
							<p class="editDataBtn my-btn" id="editContact">Edit data</p>
					</span> <span class="saveBtn">
							<p class="editDataBtn my-btn" id="saveContactHotel">Salva</p>
					</span>
					</span>
				</div>
			</fieldset>
		</div>
	</div>
</div>
<div class="clear_div">&nbsp;</div>

<div>
	<!-- EDIT CONTATTI -->
	<script type="text/javascript">
		$(".lastLine .cellBtn #editContactHotel")
				.click(
						function() {
							//$.getScript("public/js/editDash.js", function() {
							$("#dashDataContacts .dashNoEditing").removeAttr(
									"disabled");
							$("#contatto .lastLine .labelSaveData .lineHidden")
									.css("display", "inline");
							$("#contatto .lastLine .cellBtn .editBtn").css(
									"display", "none");
							$("#contatto .lastLine .cellBtn .saveBtn").css(
									"display", "inline");
							$(".lastLine .cellBtn #saveContact")
									.click(
											function() {
												$
														.ajax({
															type : 'POST',
															url : "index.php",
															data : {
																o : 'EditData',
																telefono : $(
																		"#phoneNumber")
																		.val(),
																mobile : $(
																		"#mobilePhone")
																		.val(),
																fax : $(
																		"#faxNumber")
																		.val(),
																email : $(
																		"#email")
																		.val(),
																edit : "Contatto"
															},
															success : function(
																	data) {
																if (data == 1) {
																	$(
																			"#contatto .lastLine .labelSaveData .lineHidden")
																			.css(
																					"display",
																					"none");
																	$(
																			"#contatto .lastLine .cellBtn .editBtn")
																			.css(
																					"display",
																					"inline");
																	$(
																			"#contatto .lastLine .cellBtn .saveBtn")
																			.css(
																					"display",
																					"none");
																} else
																	alert("errore, riprovare!!");
															},
															dataType : "json"
														});// AJAX CLOSED
											});
							//$("#dashData .dashNoEditing").attr("disabled");
							//});
						});
	</script>

	<!-- EDIT DATI GENERALI -->
	<script type="text/javascript">
		$(".lastLine .cellBtn #editDatiGeneraliHotel")
				.click(
						function() {
							$("#datiGenerali").css("position", "relative");
							$("#datiGenerali").css("z-index", "4000");
							$("#dashData .dashNoEditing")
									.removeAttr("disabled");
							$("#dashData #conf-password").css("display",
									"table-row");
							$("#dashData #ricaricaCredito").css("display",
									"table-row");
							$(
									"#datiGenerali .lastLine .labelSaveData .lineHidden")
									.css("display", "inline");
							$("#datiGenerali .lastLine .cellBtn .editBtn").css(
									"display", "none");
							$("#datiGenerali .lastLine .cellBtn .saveBtn").css(
									"display", "inline");
							$(".lastLine .cellBtn #saveDatiGenerali")
									.click(
											function() {
												$
														.ajax({
															type : 'POST',
															url : "index.php",
															data : {
																o : 'EditData',
																pwd : $
																		.md5($(
																				'#password')
																				.val()),
																edit : "DatiGenerali"
															},
															success : function(
																	data) {
																if (data == 1) {
																	$(
																			"#dashData #password")
																			.val(
																					$
																							.md5("#password"));
																	$(
																			"#dashData #ricaricaCredito")
																			.css(
																					"display",
																					"none");
																	$(
																			"#dashData #conf-password")
																			.css(
																					"display",
																					"none");
																	$(
																			"#datiGenerali .lastLine .labelSaveData .lineHidden")
																			.css(
																					"display",
																					"none");
																	$(
																			"#datiGenerali .lastLine .cellBtn .editBtn")
																			.css(
																					"display",
																					"inline");
																	$(
																			"#datiGenerali .lastLine .cellBtn .saveBtn")
																			.css(
																					"display",
																					"none");
																} else
																	alert("errore, riprovare!!");
															},
															dataType : "json"
														});// AJAX CLOSED
											});
							//$("#dashData .dashNoEditing").attr("disabled");
							//});
						});
	</script>

	<!--  EDIT RESIDENZA -->
	<script type="text/javascript">
		$(".lastLine .cellBtn #editDescrizione").click(function() {
			$("#dashDataAddress .dashNoEditing").removeAttr(
					"disabled");
			$("#residenza .lastLine .labelSaveData .lineHidden")
					.css("display", "inline");
			$("#residenza .lastLine .cellBtn .editBtn").css(
					"display", "none");
			$("#residenza .lastLine .cellBtn .saveBtn").css(
					"display", "inline");
			$(".lastLine .cellBtn #saveResidenza").click(function() {
				$.ajax({
						type : 'POST',
						url : "index.php",
						data : {
							o : 'EditData',
							via : $("#via").val(),
							citta : $("#citta").val(),
							prov : $("#prov").val(),
							cap : $("#cap").val(),
							edit : "Residenza"
						},
						success : function(
								data) {
							if (data == 1) {
								$("#residenza .lastLine .labelSaveData .lineHidden")
									.css("display","none");
								$("#residenza .lastLine .cellBtn .editBtn")
									.css("display",	"inline");
								$("#residenza .lastLine .cellBtn .saveBtn")
									.css("display","none");
							} else
								alert("errore, riprovare!!");
						},
						dataType : "json"
					});// AJAX CLOSED
			});
			//$("#dashData .dashNoEditing").attr("disabled");
			//});
		});
	</script>
	
	<!--  EDIT ROOM -->
	<script type="text/javascript">
		$(".lastLine .cellBtn #editRoom").click(function() {
			$("#dashDataAddress .dashNoEditing").removeAttr(
					"disabled");
			$("#residenza .lastLine .labelSaveData .lineHidden")
					.css("display", "inline");
			$("#residenza .lastLine .cellBtn .editBtn").css(
					"display", "none");
			$("#residenza .lastLine .cellBtn .saveBtn").css(
					"display", "inline");
			$(".lastLine .cellBtn #saveResidenza").click(function() {
				$.ajax({
						type : 'POST',
						url : "index.php",
						data : {
							o : 'EditData',
							via : $("#via").val(),
							citta : $("#citta").val(),
							prov : $("#prov").val(),
							cap : $("#cap").val(),
							edit : "Residenza"
						},
						success : function(
								data) {
							if (data == 1) {
								$("#residenza .lastLine .labelSaveData .lineHidden")
									.css("display","none");
								$(
										"#residenza .lastLine .cellBtn .editBtn")
										.css(
												"display",
												"inline");
								$(
										"#residenza .lastLine .cellBtn .saveBtn")
										.css(
												"display",
												"none");
							} else
								alert("errore, riprovare!!");
						},
						dataType : "json"
				});// AJAX CLOSED
			});
			//$("#dashData .dashNoEditing").attr("disabled");
			//});
		});
	</script>
</div>