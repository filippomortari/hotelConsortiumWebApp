<?php /* Smarty version Smarty-3.0.9, created on 2012-11-15 10:55:18
         compiled from "smarty/template/HotelHome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82265944850a4bc06681b23-87354133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43fb060fba1e07ffb0c46a7d3c838dd15251a344' => 
    array (
      0 => 'smarty/template/HotelHome.tpl',
      1 => 1352973316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82265944850a4bc06681b23-87354133',
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
	<!-- ----------------------------------- -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div id="to_delete">
						<div id="content-dash"></div>
						<div class="clear_div">&nbsp;</div>
						<!-- smarty per alberghi consigliati -->
						<!-- fine smarty per alberghi consigliati -->
						<div class="clear_div">&nbsp;</div>
					</div>
					<!-- end #content -->
				</div>
				<!-- end #toDelete -->
				<div id="sidebar"><?php $_template = new Smarty_Internal_Template("private/html/hotelierCommand.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?></div>
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
				albergatori</span> <?php $_template = new Smarty_Internal_Template("private/html/hotelierLogin.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		</p>
	</div>
	<!-- fine footer -->
</body>
</html>
