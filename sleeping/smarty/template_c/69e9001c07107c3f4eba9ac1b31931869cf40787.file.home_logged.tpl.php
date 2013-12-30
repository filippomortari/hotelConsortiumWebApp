<?php /* Smarty version Smarty-3.0.9, created on 2012-11-25 00:09:36
         compiled from "./sleeping/smarty/template/home_logged.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7762991350b153b0eb7bd8-33954389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69e9001c07107c3f4eba9ac1b31931869cf40787' => 
    array (
      0 => './sleeping/smarty/template/home_logged.tpl',
      1 => 1353798173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7762991350b153b0eb7bd8-33954389',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("./sleeping/smarty/template/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
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
					<h1 id="user-name">Ciao <?php echo $_smarty_tpl->getVariable('user')->value;?>
</h1>
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
					Il progetto realizzato da Daniele Di Pompeo ha le funzionalità per la ricerca di hotel registrati da parte di
					utenti registrati al portale e non. Gli utenti registrati possono anche effettuare direttamente le prenotazioni.
				</p>
			</div>
				<div class="toDelete">
					<?php $_template = new Smarty_Internal_Template("./sleeping/smarty/template/galleryHome.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
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
		�2011-2012 silentmanSoftwareHouse | info: <a
			href="mailto:dipompeodaniele@gmail.com"> info@dormireabruzzo.it </a>
		| <span id="hoteliers">sei loggato</span>
	</p>
</div>
<!-- fine footer -->
	
</body>
</html>
