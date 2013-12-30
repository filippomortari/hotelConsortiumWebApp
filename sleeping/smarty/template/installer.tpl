{include file="header.tpl"}
<body>
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<a href="index.php"> <img src="public/img/logo.png" />
				</a>
			</div>
		</div>
		<!-- end header -->
	</div>
	<!-- end header-wrap -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<h1>Stai installando il DB</h1>
					<form action="index.php" method="post">
						<label for="userDB">Utente: </label>
						<input type="text" name="userDB"/>
						<br />
						<label for="pwdDB">Utente: </label>
						<input type="password" name="pwdDB"/>
						<br />
						<label for="nameDB">Nome del dataBase: </label>
						<input type="text" value="sleeping2" />
						<br />
						<input type="hidden" name="o" value="Installer" />
						<input type="submit" value="crea il db" class="my-btn"/> 
					</form>
		</div>
			
	</div>
	<!-- ----------------------------------- -->
	<!-- footer  -->
	<div id="footer">
		<p>Dormire in abruzzo Portale per le strutture ricettive</p>
		<p id="footer_info">
			�2011-2012 silentmanSoftwareHouse | info: <span class="p-link">
				info@dormireabruzzo.it </span>
		</p>
	</div>
	<!-- fine footer -->
</body>
</html>