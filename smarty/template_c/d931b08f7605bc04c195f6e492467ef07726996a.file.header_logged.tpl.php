<?php /* Smarty version Smarty-3.0.9, created on 2012-09-11 16:57:53
         compiled from "smarty/template\header_logged.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2369504f5171457cf7-87734902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd931b08f7605bc04c195f6e492467ef07726996a' => 
    array (
      0 => 'smarty/template\\header_logged.tpl',
      1 => 1347374988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2369504f5171457cf7-87734902',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="logged">
	<h1 id="user-name"><?php echo $_smarty_tpl->getVariable('user')->value;?>
</h1>
	<h2> Area riservata: </h2>
	<table>
		<tbody>
			<tr>
				<td>
					<p class="p-link" id="logout">logout</a>
				</td>
				<td>&nbsp;</td>
				<td>
					<p class="p-link" id="dashboard">profilo</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<!-- end logged -->