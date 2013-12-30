<?php /* Smarty version Smarty-3.0.9, created on 2012-11-24 18:35:52
         compiled from "private/html/fileUpload.html" */ ?>
<?php /*%%SmartyHeaderCode:12516926750b10578263272-49059405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4835083731c1e0d7bb7bb07c27274719ff09f605' => 
    array (
      0 => 'private/html/fileUpload.html',
      1 => 1353778518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12516926750b10578263272-49059405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form id="uploadform" action="index.php" method="post" enctype="multipart/form-data">
	<input type="file" id="myfile" name="myfile" />
	<p class="my-btn" id="loadFile"> scegli il file </p>
	<input type="hidden" name="o" value="FileUpload" />
</form>