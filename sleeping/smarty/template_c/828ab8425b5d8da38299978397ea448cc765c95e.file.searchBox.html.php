<?php /* Smarty version Smarty-3.0.9, created on 2012-11-26 10:42:56
         compiled from "./sleeping/private/html/searchBox.html" */ ?>
<?php /*%%SmartyHeaderCode:182037839050b339a05ba1b1-01665445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '828ab8425b5d8da38299978397ea448cc765c95e' => 
    array (
      0 => './sleeping/private/html/searchBox.html',
      1 => 1353922772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182037839050b339a05ba1b1-01665445',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<li>
	<div id="search">
		<!--  Form richiesta generale -->
		<div id="div_form">
			<form id="formSearch">
				<p id="saerch-header">indica la zona e io ti trovo le strutture!</p>
				<div id="div-form">
					<div class="input-wrapper">
						<label for="" class="table_cell">Località</label> <input type="text"
							name="where-city" class="search-text table_cell" value="cagnano amiterno" />
					</div>
					<div class="input-wrapper">
						<label class="table_cell">Persone</label> <input
							class="search-text table_cell" type="text" name="people" value=""
							size="2" id="spinner" />
					</div>
					<div class="input-wrapper">
						<label class="table_cell">Check-in</label> <input type="text"
							id="from" class="table_cell search-text" size="8" />
					</div>
					<div class="input-wrapper">
						<label class="table_cell">Check-out</label> <input type="text"
							id="to" class="table_cell search-text" size="8" />
					</div>
					<div id="end-form" class="input-wrapper">
						<span class="table_cell">
							<p class="find-btn my-btn" id="formFindHotel">cerca</p>
						<div class="clear_div">&nbsp;</div>
					</div>
					</div>
			</form>
			<!-- fine general_request -->
		</div>
		<div id="sliderBoxSearch">&nbsp;</div>
	</div>
	<div class="clear_div">&nbsp;</div>
</li>

<div id="dateErrate" title="date errate" style="display: none">
    <p>
    	Si prega di inserire date corrette;
    </p>
</div>