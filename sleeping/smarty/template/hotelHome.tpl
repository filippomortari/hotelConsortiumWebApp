<!-- pagina di modifca dei dati dell'albergo -->

{include file="./sleeping/smarty/template/header.tpl"}
<body>
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<a href="index.php"> <img src="./sleeping/public/img/logo.png" />
				</a>
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
					<div id="to_delete">
						<div id="content-dash"></div>
						<div class="clear_div">&nbsp;</div>
					</div>
					<!-- end #content -->
				</div>
				<!-- end #toDelete -->
				<div id="sidebar">{include file="./sleeping/private/html/hotelierCommand.html"}</div>
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
				albergatori</span>
		</p>
	</div>
	<!-- fine footer -->
</body>
</html>
