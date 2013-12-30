<div id="dashboard">
	<div id="photoWrapper">
		<fieldset>
			<legend>Foto</legend>
			<div id="dashPhoto">
				<div id="showimg">
					<img src="{$foto}" />
				</div>
				<span id="fotoName">foto del profilo</span>
			</div>
			<div id="changePhoto">
				{include file="./sleeping/private/html/fileUpload.html"}
			</div>
		</fieldset>
	</div>
	<div class="dataWrapper">
		<div id="datiGenerali" class="dashLeft">
			<fieldset class="fieldsetWrapper">
				<legend>Dati Generali</legend>
				<div id="dashData">
					<span class="rowTable"> <label for="" class="cellLabel">Nome:</label>
						<input type="text" id="nome" class="dashNoEditing"
						value="{$user_nome}" disabled="disabled" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">Cognome:</label>
						<input type="text" id="cognome" class="dashNoEditing"
						value="{$user_cognome}" disabled="disabled" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">Username:</label>
						<input type="text" id="username" class="dashNoEditing"
						value="{$user_username}" disabled="disabled" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">Password:</label>
						<input type="password" id="password" class="dashNoEditing"
						value="{$user_password}" disabled="disabled" />
					</span> <span class="rowTable" id="conf-password"> <label for=""
						class="cellLabel">Conferma la password:</label> <input
						type="password" id="re-password" class="dashNoEditing"
						value="{$user_password}" disabled="disabled" />
					</span> 
				</div>
				<div class="lastLine">
					<span class="labelSaveData"> <span class="lineHidden">Ora
							puoi modificare i dati</span>
					</span> <span class="cellBtn"> <span class="editBtn">
							<p class="editDataBtn my-btn" id="editDatiGenerali">Edit data</p>
					</span> <span class="saveBtn">
							<p class="editDataBtn my-btn" id="saveDatiGenerali">Salva</p>
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
						value="{$contatti_telefono}" disabled="disabled" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">Cellulare:</label>
						<input type="text" id="mobilePhone" class="dashNoEditing"
						value="{$contatti_mobile}" disabled="disabled" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">Fax:</label>
						<input type="text" id="faxNumber" class="dashNoEditing"
						value="{$contatti_fax}" disabled="disabled" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">E-Mail:</label>
						<input type="text" id="email" class="dashNoEditing"
						value="{$contatti_email}" disabled="disabled" />
					</span>
				</div>
				<div class="lastLine">
					<span class="labelSaveData"> <span class="lineHidden">Ora
							puoi modificare i dati</span>
					</span> <span class="cellBtn"> <span class="editBtn">
							<p class="editDataBtn my-btn" id="editContact">Edit data</p>
					</span> <span class="saveBtn">
							<p class="editDataBtn my-btn" id="saveContact">Salva</p>
					</span>
					</span>
				</div>
			</fieldset>
		</div>
	</div>
	<div class="dataWrapper">
		<div id="residenza" class="dashLeft">
			<fieldset class="fieldsetWrapper">
				<legend>Dati Residenza</legend>
				<div id="dashDataAddress">
					<span class="rowTable"> <label for="" class="cellLabel">Via:</label>
						<input type="text" id="via" class="dashNoEditing"
						value="{$residenza_via}" disabled="disabled" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">Comune:</label>
						<input type="text" id="citta" class="dashNoEditing"
						value="{$residenza_citta}" disabled="disabled" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">Provincia:</label>
						<input type="text" id="prov" class="dashNoEditing"
						value="{$residenza_prov}" disabled="disabled" size="2" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">cap:</label>
						<input type="text" name="zipCode" id="cap" class="dashNoEditing"
						value="{$residenza_cap}" disabled="disabled" size="5" />
					</span> <span class="rowTable"> <label for="" class="cellLabel">Nome:</label>
					</span>
				</div>
				<div class="lastLine">
					<span class="labelSaveData"> <span class="lineHidden">Ora
							puoi modificare i dati</span>
					</span> <span class="cellBtn"> <span class="editBtn">
							<p class="editDataBtn my-btn" id="editResidenza">Edit data</p>
					</span> <span class="saveBtn">
							<p class="editDataBtn my-btn" id="saveResidenza">Salva</p>
					</span>
					</span>
				</div>
			</fieldset>
		</div>
	</div>
</div>
<div class="clear_div">&nbsp;</div>

<div id="loadScript">
<!-- MyJsScript -->
</div>

<div>	
	<!-- EDIT CONTATTI -->
	<script type="text/javascript">
		$(".lastLine .cellBtn #editContact").click(function() {
			$("#dashDataContacts .dashNoEditing").removeAttr(
					"disabled");
			$("#contatto .lastLine .labelSaveData .lineHidden")
					.css("display", "inline");
			$("#contatto .lastLine .cellBtn .editBtn").css(
					"display", "none");
			$("#contatto .lastLine .cellBtn .saveBtn").css(
					"display", "inline");
			$(".lastLine .cellBtn #saveContact").click(function() {	
				$.ajax({
						type : 'POST',
						url : "index.php",
						data : {
							o : 'EditData',
							telefono : $("#phoneNumber").val(),
							mobile : $("#mobilePhone").val(),
							fax : $("#faxNumber").val(),
							email : $("#email").val(),
							edit : "Contatto"
						},
						success : function(	data) {
							if (data == 1) {
								$("#contatto .lastLine .labelSaveData .lineHidden")
										.css("display","none");
								$("#contatto .lastLine .cellBtn .editBtn")
										.css("display","inline");
								$("#contatto .lastLine .cellBtn .saveBtn")
										.css("display","none");
							} else
								alert("errore, riprovare!!");
						},
						dataType : "json"
					});// AJAX CLOSED
				});
			});
	</script>

	<!-- EDIT DATI GENERALI -->
	<script type="text/javascript">
		$(".lastLine .cellBtn #editDatiGenerali")
				.click(
						function() {
							//$.getScript("public/js/editDash.js", function() {
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
		$(".lastLine .cellBtn #editResidenza")
				.click(
						function() {
							//$.getScript("public/js/editDash.js", function() {
							$("#dashDataAddress .dashNoEditing").removeAttr(
									"disabled");
							$("#residenza .lastLine .labelSaveData .lineHidden")
									.css("display", "inline");
							$("#residenza .lastLine .cellBtn .editBtn").css(
									"display", "none");
							$("#residenza .lastLine .cellBtn .saveBtn").css(
									"display", "inline");
							$(".lastLine .cellBtn #saveResidenza")
									.click(
											function() {
												$
														.ajax({
															type : 'POST',
															url : "index.php",
															data : {
																o : 'EditData',
																via : $("#via")
																		.val(),
																citta : $(
																		"#citta")
																		.val(),
																prov : $(
																		"#prov")
																		.val(),
																cap : $("#cap")
																		.val(),
																edit : "Residenza"
															},
															success : function(
																	data) {
																if (data == 1) {
																	$(
																			"#residenza .lastLine .labelSaveData .lineHidden")
																			.css(
																					"display",
																					"none");
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