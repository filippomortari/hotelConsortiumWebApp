<?php /* Smarty version Smarty-3.0.9, created on 2012-11-24 19:24:46
         compiled from "./smarty/template/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57913854550b110eedd7225-48231192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b31f5fe40e6a5cb3c0f229b674e7f562c251e1ba' => 
    array (
      0 => './smarty/template/error.tpl',
      1 => 1351260706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57913854550b110eedd7225-48231192',
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
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<title>Portale strutture in abruzzo</title>
	<!-- css style -->
	<link href="public/css/resetStyle.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="public/css/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>

	<!-- JQueryLibs -->
	
	<script type="text/javascript" src="../libs/js/jquery/jquery-1.8.2.min.js"></script>
	
	<!-- JQuery UI Libs -->
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery-ui-1.9.0.custom.min.js"></script>
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery.effects.core.js"></script>
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery.ui.widget.js"></script>
	<!-- Effects -->
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery.effects.bounce.js"></script>
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery.effects.explode.js"></script>
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery.effects.blind.js"></script>
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery.effects.clip.js"></script>
	<!-- Widget -->
	<script type="text/javascript" src="../libs/js/jquery-ui/jquery.ui.accordion.js"></script>
	
	<!-- JQueryLibs MD5 -->
	<script type="text/javascript" src="../libs/js/jquery.md5.js"></script>
	
	
	<!-- MyJsScript -->
	<script type="text/javascript" src="public/js/login.js"></script>
	<script type="text/javascript" src="public/js/ricerca_avanzata.js"></script>
	<script type="text/javascript" src="public/js/save_opt.js"></script>
	<script type="text/javascript" src="public/js/hotelier_login.js"></script>
	<script type="text/javascript" src="public/js/work-on-font.js"></script>
	<script type="text/javascript" src="public/js/signup.js"></script>
	<script type="text/javascript" src="public/js/areapersonale.js"></script>
	<script type="text/javascript" src="public/js/checkData.js"></script>
	
	</head>
	<body onload="setFontSize()">
		<!-- inizio sessione -->
		<div id="header-wrapper">
			<div id="header">
				<div id="logo">
					<h1>
						<a href="index.php">Dormire in Abruzzo </a>
					</h1>
				</div>
				<div id="box-login-header">
					<div class="toDelete">
					<div class="noLogged">
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
													<td class="td-value"><input type="password" class="pwd"
														name="pwd" class="input-text-login" /></td>
												</tr>
												<tr>
													<td class="td-value">
														<p class="p-link" id="signin">login</p>
													</td>
													<td class="td-value" id="td-rec">
														<p class="p-link" class="p-signup" id="signup">Registrati</p>
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
						<div id="increased-font">
							<img src="public/img/font_plus.png" id="plus-font" class="p-link" />
							<img src="public/img/font_minus.png" id="minus-font" class="p-link" />
						</div>
					<!-- end increased-font -->
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
					<h1><?php echo $_smarty_tpl->getVariable('url')->value;?>
</h1>
					<br />
					<p>ha causato l'errore: <strong><?php echo $_smarty_tpl->getVariable('errore')->value;?>
</strong> </p>
					<h3>l'errore verr&agrave; risolto al pi&ugrave; presto, una mail &egrave; stata inviata al webmaster</h3>
				</div>
				<!-- end #toDelete -->
				<div id="sidebar">
						<ul>
							<li>
								<div id="search">
									<!--  Form richiesta generale -->
									<form method="post" action="">
										<div id="div-form">
											<p>indica la zona e io ti trovo le strutture!</p>
											<input type="text" name="s" id="search-text" value="" /> <input
												type="submit" id="search-submit" value="CERCA" />
											<div class="clear_div">&nbsp;</div>
											<p class="p-link" id="ric_avan">ricerca avanzata</p>
											<div class="overlay"></div>
											<div id="div-ric-avanzata">
												<div>
													<table>
														<tr>
															<td><label>Sceglia la marcozona</label></td>
															<td><select class="option-request" name="macrozona">
																	<option value="all">Qualsiasi</option>
																	<option value="PNGranSasso">parco Nazionale del
																		GranSasso</option>
																	<option value="PNAbruzzo">parco Nazionale
																		d'Abruzzo</option>
																	<option value="CNord">costa Nord</option>
																	<option value="CSud">costa Sud</option>
																	<option value="ColChietino">colline del
																		Chietino</option>
															</select></td>
														</tr>
														<tr>
															<td><label>Sceglia la tipologia</label></td>
															<td><select class="option-request" name="tipologia">
																	<option value="all">qualsiasi</option>
																	<option value="singola">singola</option>
																	<option value="doppia">doppia</option>
																	<option value="matrimoniale">matrimoniale</option>
																	<option value="tripla">tripla</option>
																	<option value="quadrupla">quadrupla</option>
																	<option value="monolocale">monolocale</option>
															</select></td>
														</tr>
														<tr>
															<td>
																<p>Servizi optionali:</p>
															</td>
														</tr>
													</table>
												</div>
												<table>
													<tbody>
														<tr>
															<td><input type="checkbox" name="animal" value="true" />
																<label>Animali ammessi</label></td>
														</tr>
														<tr>
															<td><input type="checkbox" name="bike" value="true" />
																<label>Aria Condizionata</label></td>
														</tr>
													</tbody>
												</table>
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
	
						</ul>
					</div>
					<!-- fine sidebar -->
					<div class="clear_div">&nbsp;</div>
				</div>
			</div>
			<div id="load_script"></div>
		</div>
	
	
	<!-- ----------------------------------- -->
	
	<!-- footer  -->
	<div id="footer">
		<p>Dormire in abruzzo Portale per le strutture ricettive</p>
		<p id="footer_info">
			�2011-2012 silentmanSoftwareHouse | info: <span class="p-link"> info@dormireabruzzo.it </span>
			| <span class="p-link" id="hoteliers">area albergatori</span>
		</p>
		<div id="hoteliers_login">
			<div id="div_form">
				<form>
					<fieldset>
						<table>
							<tr>
								<td class="td-label">
									<label for="user">user </label>
								</td>
								<td class="td-value">
									<input type="text" id="hotel-user" name="user" class="input-text-login"/>
								</td>		
							</tr>
							<tr>
								<td class="td-label">
									<label for="pwd">password </label>
								</td>
								<td class="td-value">
									<input type="password" id="hotel-pwd" name="pwd" class="input-text-login"/>
								</td>		
							</tr>
							<tr>
								<td class="td-value">
									<p class="p-link" id="hotel_signin">
										login
									</p>
								</td>
							</tr>
						</table>
					</fieldset>
				</form> 
			</div>
			<div class="vertical-line">&nbsp;</div>
			<div id="div-sigup">
					<p class="p-link" id="hoteliers_signup">signup</p>
			</div>
			<p class="chiudi">X</p>
		</div>
		<!-- end #hoteliers_login -->
	</div>
	<!-- fine footer -->
	
	</body>
</html>
