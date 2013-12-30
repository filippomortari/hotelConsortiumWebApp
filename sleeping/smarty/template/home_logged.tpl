{include file="./sleeping/smarty/template/header.tpl"}
<body >
	<!-- inizio sessione -->
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<a href="index.php">
					<img src="./sleeping/public/img/logo.png" />
				</a>
			</div>
			<div id="box-login-header">
				<div class="boxLogin">
					<h1 id="user-name">Ciao {$user}</h1>
					<h2> Area riservata: </h2>
					<table id="line-btn">
						<tbody>
							<tr>
								<td id="logout_td">
									<p class="p-link my-btn" id="logout">logout</p>
								</td>
								<td> &nbsp; </td>
								<td id="profilo_td">
									<p class="p-link my-btn" id="dashboard-btn">profilo</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- end logged -->
			</div>
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
				</p>
			</div>
				<div class="toDelete">
					{include file="./sleeping/smarty/template/galleryHome.tpl"}
					<!-- end gallerty -->
					<div class="clear_div">&nbsp;</div>
					<!-- smarty per alberghi consigliati -->
					<!-- fine smarty per alberghi consigliati -->
					<div class="clear_div">&nbsp;</div>
				<!-- end .toDelete -->
				</div>
			</div>
			<!-- end #content -->
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
		�2011-2012 silentmanSoftwareHouse | info: <a
			href="mailto:dipompeodaniele@gmail.com"> info@dormireabruzzo.it </a>
		| <span id="hoteliers">sei loggato</span>
	</p>
</div>
<!-- fine footer -->
	
</body>
</html>
