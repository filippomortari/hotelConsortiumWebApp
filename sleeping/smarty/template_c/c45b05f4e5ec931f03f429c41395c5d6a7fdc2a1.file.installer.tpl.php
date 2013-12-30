<?php /* Smarty version Smarty-3.0.9, created on 2012-11-19 16:20:21
         compiled from "smarty/template/installer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8603730450aa4e3594f778-69915675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c45b05f4e5ec931f03f429c41395c5d6a7fdc2a1' => 
    array (
      0 => 'smarty/template/installer.tpl',
      1 => 1353338412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8603730450aa4e3594f778-69915675',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
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