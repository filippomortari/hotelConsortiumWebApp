<?php /* Smarty version Smarty-3.0.9, created on 2012-11-24 23:52:40
         compiled from "./sleeping/smarty/template/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75371350950b14fb8b84a51-29808978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f91f93a85cf012d3e045dc128c1b4d24113e5b76' => 
    array (
      0 => './sleeping/smarty/template/home.tpl',
      1 => 1353797556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75371350950b14fb8b84a51-29808978',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("./sleeping/smarty/template/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
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
							Il progetto realizzato da Daniele Di Pompeo ha le funzionalità per la ricerca di hotel registrati da parte di
							utenti registrati al portale e non. Gli utenti registrati possono anche effettuare direttamente le prenotazioni.
							Per questa fase del progetto e a causa della scadenza del timeboxed la prenotazione non è stata implementata
							interamente.
						</p>
					</div>
					<div id="to_delete">
						<?php $_template = new Smarty_Internal_Template("./sleeping/smarty/template/galleryHome.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
						<div class="clear_div">&nbsp;</div>
						<!-- smarty per alberghi consigliati -->
						<?php $_template = new Smarty_Internal_Template("./sleeping/smarty/template/hotelConsigliati.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
						<!-- fine smarty per alberghi consigliati -->
						<div class="clear_div">&nbsp;</div>
					</div>
					<!-- end #content -->
				</div>
				<!-- end #toDelete -->
				<div id="sidebar">
					<ul>
						<?php $_template = new Smarty_Internal_Template("./sleeping/private/html/searchBox.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
						<?php $_template = new Smarty_Internal_Template("./sleeping/smarty/template/news.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
					</ul>
				</div>
				
				<!-- fine sidebar -->
				<div class="clear_div">&nbsp;</div>
			</div>
		</div>
		<div id="load_script">
			<?php  $_smarty_tpl->tpl_vars['js_script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('js')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['js_script']->key => $_smarty_tpl->tpl_vars['js_script']->value){
?>
			 	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_script']->value;?>
" ></script>
			<?php }} ?>
		</div>
			
	</div>
	<!-- ----------------------------------- -->
	<!-- footer  -->
	<div id="footer">
		<p>Dormire in abruzzo Portale per le strutture ricettive</p>
		<p id="footer_info">
			�2011-2012 silentmanSoftwareHouse | info: <span class="p-link">
				info@dormireabruzzo.it </span> | <span class="p-link" id="hoteliers">area
				albergatori</span> <?php $_template = new Smarty_Internal_Template("./sleeping/private/html/hotelierLogin.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		</p>
	</div>
	<!-- fine footer -->
</body>
</html>
