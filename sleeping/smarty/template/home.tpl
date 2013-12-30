{include file="./sleeping/smarty/template/header.tpl"}
<body>
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<a href="index.php"> <img src="./sleeping/public/img/logo.png" />
				</a>
			</div>
			<div id="box-login-header">
				<div class="toDelete">
					<div class="boxLogin">
						<ul>
							<li class="bar-menu">
								<div>
									<form>
										<fieldset>
											<table>
												<tr>
													<td class="td-label"><label for="user">user </label></td>
													<td class="td-value"><input type="text" class="user"
														name="user" class="input-text-login" /></td>
												</tr>
												<tr>
													<td class="td-label"><label for="pwd">password
													</label></td>
													<td class="td-value"><input type="password"
														class="pwd" name="pwd" class="input-text-login" /></td>
												</tr>
												<tr>
													<td class="td-value" id="td-login">
														<p class="my-btn" id="signin">login</p>
													</td>
													<td class="td-value" id="td-rec">
														<p class="my-btn p-signup" id="signup">Registrati</p>
													</td>
												</tr>
											</table>
										</fieldset>
									</form>
								</div>
							</li>
						</ul>
					</div>
					<!-- end nologged -->
				</div>
				<!-- end toDelete -->
			</div>
			<!-- end box-login-header -->

		</div>
		<!-- end header -->
	</div>
	<!-- end header-wrap -->
	<!-- ----------------------------------- -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div id="presentazioneProgetto">
						<p> 
							Dormire in Abruzzo, nasce da un progetto didattico per il corso di programmazione per il web
							di ingegneria informatica ed automatica dell'università dell'aquila. Il corso tenuto dal prof. Cicerone
							ha come obiettivo l'insegnamento del web 2.0.
						</p>
						<p>
							Il progetto realizzato ha le funzionalità per la ricerca di hotel registrati da parte di
							utenti registrati al portale e non. Gli utenti registrati possono anche effettuare direttamente le prenotazioni.
							Per questa fase del progetto e a causa della scadenza del timeboxed la prenotazione non è stata implementata
							interamente.
						</p>
					</div>
					<div id="to_delete">
						{include file="./sleeping/smarty/template/galleryHome.tpl"}
						<div class="clear_div">&nbsp;</div>
						<!-- smarty per alberghi consigliati -->
						{include file="./sleeping/smarty/template/hotelConsigliati.tpl"}
						<!-- fine smarty per alberghi consigliati -->
						<div class="clear_div">&nbsp;</div>
					</div>
					<!-- end #content -->
				</div>
				<!-- end #toDelete -->
				<div id="sidebar">
					<ul>
						{include file="./sleeping/private/html/searchBox.html"}
						{include file="./sleeping/smarty/template/news.tpl"}
					</ul>
				</div>
				
				<!-- fine sidebar -->
				<div class="clear_div">&nbsp;</div>
			</div>
		</div>
		<div id="load_script">
			{foreach from=$js item=js_script}
			 	<script type="text/javascript" src="{$js_script}" ></script>
			{/foreach}
		</div>
			
	</div>
	<!-- ----------------------------------- -->
	<!-- footer  -->
	<div id="footer">
		<p>Dormire in abruzzo Portale per le strutture ricettive</p>
		<p id="footer_info">
			�2011-2012 silentmanSoftwareHouse | info: <span class="p-link">
				info@dormireabruzzo.it </span> | <span class="p-link" id="hoteliers">area
				albergatori</span> {include file="./sleeping/private/html/hotelierLogin.html"}
		</p>
	</div>
	<!-- fine footer -->
</body>
</html>
