<?php /* Smarty version Smarty-3.0.9, created on 2012-11-26 12:56:59
         compiled from "./sleeping/private/html/fileUploadLogo.html" */ ?>
<?php /*%%SmartyHeaderCode:176301407650b3590bc6c993-03500127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdee7f9c00c362db4d638a6da0d4c114520e76cf' => 
    array (
      0 => './sleeping/private/html/fileUploadLogo.html',
      1 => 1353930998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176301407650b3590bc6c993-03500127',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form id="uploadLogoform" action="index.php" method="post" enctype="multipart/form-data" target="uploadframe">
	<input type="file" id="myfile" name="myfile" />
	<p class="my-btn" id="loadFile"> scegli il file </p>
	<input type="hidden" name="o" value="FileUploadLogo" />
	<!-- <iframe id="uploadframe" name="uploadframe" src="upload_img.php" width="8" height="8" scrolling="no" frameborder="0"></iframe> -->
</form>