<?php /* Smarty version Smarty-3.0.9, created on 2012-11-26 12:42:18
         compiled from "./sleeping/private/html/fileUpload.html" */ ?>
<?php /*%%SmartyHeaderCode:106230259850b3559a1892b5-52685564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8539cc8b18175ff9d35a1a34e45782f3aa9c127a' => 
    array (
      0 => './sleeping/private/html/fileUpload.html',
      1 => 1353930128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106230259850b3559a1892b5-52685564',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form id="uploadform" action="index.php" method="post" enctype="multipart/form-data" target="uploadframe">
	<input type="file" id="myfile" name="myfile" />
	<p class="my-btn" id="loadFile"> scegli il file </p>
	<input type="hidden" name="o" value="FileUpload" />
	<iframe id="uploadframe" name="uploadframe" src="upload_img.php" width="8" height="8" scrolling="no" frameborder="0"></iframe>
</form>