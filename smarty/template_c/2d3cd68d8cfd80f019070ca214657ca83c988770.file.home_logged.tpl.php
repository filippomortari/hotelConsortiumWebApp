<?php /* Smarty version Smarty-3.0.9, created on 2012-09-21 15:20:24
         compiled from "smarty/template\home_logged.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20545505c69981dbb19-69215271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d3cd68d8cfd80f019070ca214657ca83c988770' => 
    array (
      0 => 'smarty/template\\home_logged.tpl',
      1 => 1348233621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20545505c69981dbb19-69215271',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Portale strutture in abruzzo</title>
	
	<!-- css style -->
	<link href="public/css/resetStyle.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="public/css/style.css" rel="stylesheet" type="text/css" media="screen" />
	
	<link href='http://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>

	
	<!-- JQueryLibs -->
	<script type="text/javascript" src="../libs/js/jquery/jquery-1.8.1.js"></script>
	
	<!-- JQuery UI Libs -->
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery-ui-1.8.23.custom.js"></script>
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery.effects.core.js"></script>
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery.effects.bounce.js"></script>
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery.effects.explode.js"></script>
	
	<!-- MyJsScript -->
	<script type="text/javascript" src="public/js/login.js"></script>
	<script type="text/javascript" src="public/js/ricerca_avanzata.js"></script>
	<script type="text/javascript" src="public/js/save_opt.js"></script>
	<script type="text/javascript" src="public/js/hotelier_login.js"></script>
	<script type="text/javascript" src="public/js/work-on-font.js"></script>
	<script type="text/javascript" src="public/js/signup.js"></script>
	<script type="text/javascript" src="public/js/areapersonale.js"></script>
</head>
<body >
	<!-- inizio sessione -->
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1> <a href="index.php">Dormire in Abruzzo </a> </h1>
			</div>
			<div id="box-login-header">
				<div class="logged">
					<h1 id="user-name"><?php echo $_smarty_tpl->getVariable('user')->value;?>
</h1>
					<h2> Area riservata: </h2>
					<table>
						<tbody>
							<tr>
								<td id="logout_td">
									<p class="p-link" id="logout">logout</p>
								</td>
								<td id="prof_az_td">
									<p class="p-link" id="prof_az"><?php echo $_smarty_tpl->getVariable('azienda')->value;?>
</p>
								</td>
								<td id="profilo_td">
									<p class="p-link" id="dashboard">profilo</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- end logged -->
				<div id="increased-font">
					<img src="public/img/font_plus.png" id="plus-font" class="p-link" />
					<img src="public/img/font_minus.png" id="minus-font" class="p-link" />
				</div>
				<!-- end increased-font -->
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
				<div class="toDelete">
					<div>
						<div id="gallery">
							<div id="gallery-background">
								<img src="public/img/gransasso.jpg" alt="" width="600" height="340" class="output" />
							</div>
						</div>
						<!-- end gallerty -->
						<div class="clear_div">&nbsp;</div>
						<!-- smarty per alberghi consigliati -->
						<!-- fine smarty per alberghi consigliati -->
						<div class="clear_div">&nbsp;</div>
					</div>
				<!-- end .toDelete -->
				</div>
			</div>
			<!-- end #content -->
			<div id="sidebar">
				<ul>
					<li>
						<div id="search">
							<!--  Form richiesta generale -->
							<form method="post" action="">
								<div id="div-form">
									<p>indica la zona e io ti trovo le strutture!</p>
									<input type="text" name="s" id="search-text" value="" />
									<input type="submit" id="search-submit" value="CERCA" />
									<p class="p-link"> ricerca avanzata</p>
									<div class="overlay"></div>
									<div id="div-ric-avanzata">
									<div>
										<table>
											<tr>
												<td>
													<label>Sceglia la marcozona</label>
												</td>
												<td>
													<select class="option-request" name="macrozona">
														<option value="all">Qualsiasi</option>
														<option value="PNGranSasso">parco Nazionale del GranSasso</option>
														<option value="PNAbruzzo">parco Nazionale d'Abruzzo</option>
														<option value="CNord">costa Nord</option>
														<option value="CSud">costa Sud</option>
														<option value="ColChietino">colline del Chietino</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>
													<label>Sceglia la tipologia</label>
												</td>
												<td>
													<select class="option-request" name="tipologia">
														<option value="all">qualsiasi</option>
														<option value="singola">singola</option>
														<option value="doppia">doppia</option>
														<option value="matrimoniale">matrimoniale</option>
														<option value="tripla">tripla</option>
														<option value="quadrupla">quadrupla</option>
														<option value="monolocale">monolocale</option>
													</select>
												</td>
											</tr>
										</table>
									</div>
									<span>
										<p>Servizi optionali:</p>
									</span>
									<div>
										<input type="checkbox" name="animal" value="true" /><label>Animali ammessi</label>
									</div>
									<div>
										<input type="checkbox" name="bike" value="true" /><label>Aria Condizionata</label>
									</div>
						                <p id="save-option">salva i parametri</p>
								        <p class="chiudi">X</p>
									</div>  
									<!--fine div-ric-avanzata-->
								</div>
							</form>
							<!-- fine general_request -->
						</div>
						<div class="clear_div">&nbsp;</div>
					</li>
					<!-- smarty template Province -->
					<!-- smarty template per le news -->
					<li>
						<h2>prova h1</h2>
						<p>prova testo della news lsdmaslkmdsakl dskalndsadaskdasd
							sadosakldmaskldmsdalkasdmlkmsadas skdmaslkdmsalkdmasdm</p>
					</li>
					<li>
						<h2 class="h1_albergo">prova h2</h2>
						<p>prova testo della news lsdmaslkmdsakl dskalndsadaskdasd
							sadosakldmaskldmsdalkasdm lkmsadas skdmaslkdmsalkdm asdm</p>
					</li>
				</ul>
			</div>
			<!-- fine sidebar -->
			<div class="clear_div">&nbsp;</div>
		</div>
	</div>
</div>

<!-- ----------------------------------- -->

<!-- footer  -->
<div id="footer">
	<p>Dormire in abruzzo Portale per le strutture ricettive</p>
	<p id="footer_info">
		©2011-2012 silentmanSoftwareHouse | info: <a
			href="mailto:dipompeodaniele@gmail.com"> info@dormireabruzzo.it </a>
		| <span id="hoteliers">sei loggato</span>
	</p>
</div>
<!-- fine footer -->
	
</body>
</html>
