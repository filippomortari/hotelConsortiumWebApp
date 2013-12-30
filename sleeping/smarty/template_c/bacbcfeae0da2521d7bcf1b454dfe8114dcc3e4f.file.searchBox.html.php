<?php /* Smarty version Smarty-3.0.9, created on 2012-11-03 16:08:08
         compiled from "smarty/template/searchBox.html" */ ?>
<?php /*%%SmartyHeaderCode:163885921250953358aa8fc6-01226314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bacbcfeae0da2521d7bcf1b454dfe8114dcc3e4f' => 
    array (
      0 => 'smarty/template/searchBox.html',
      1 => 1351596909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163885921250953358aa8fc6-01226314',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="sidebar">
	<ul>
		<li>
			<div id="search">
				<!--  Form richiesta generale -->
				<form method="post" action="">
					<p id="saerch-header">indica la zona e io ti trovo le
						strutture!</p>
					<div id="div-form">
						<div class="input-wrapper">
							<label for="" class="table_cell">Provincia</label> <input
								type="text" name="where-prov" class="search-text table_cell"
								value="" />
						</div>
						<div class="input-wrapper">
							<label for="" class="table_cell">Comune</label> <input
								type="text" name="where-city" class="search-text table_cell"
								value="" />
						</div>
						<div class="input-wrapper">
							<label class="table_cell">Notti</label> 
							<span class="icon-left">
								<img src="public/img/minus16x16.png" />
							</span>
							<input class="search-text table_cell" type="text" name="nights"	value="" size="2" />
							<span class ="icon-right">
								<img src="public/img/plus16x16.png" />
							</span>
						</div>
						<div class="input-wrapper">
							<label class="table_cell">Persone</label> 
							<span class="icon-left">
								<img src="public/img/minus16x16.png" />
							</span>
							
							<input id="spinner"/>
							
							<!-- <input class="search-text table_cell" id="nights" type="text" name="people"	value="" size="2" /> -->
							
							<span class ="icon-right">
								<img src="public/img/plus16x16.png" />
							</span>
						</div>
						<div class="input-wrapper">
							<label class="table_cell">Check-in</label> 
							<input type="text" id="from" class="table_cell search-text" />
							<!--  <input class="table_cell search-text" type="text" name="checkin" id="search-text" value="" />-->
						</div>
						<div class="input-wrapper">
							<label class="table_cell">Check-out</label> 
							<input type="text" id="to" class="table_cell search-text" />
							<!-- <input class="table_cell search-text" type="text" name="checkout" id="search-text" value="" />  -->
						</div>
						<div id="end-form" class="input-wrapper">
							<span class="table_cell">
								<p class="find-btn my-btn">cerca</p>
							</span> <span class="table_cell">
								<p class="find-btn my-btn" id="ric_avan">ricerca avanzata</p>
							</span>
							<div class="clear_div">&nbsp;</div>
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
													<option value="ColChietino">colline del Chietino</option>
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
					</div>
				</form>
				<!-- fine general_request -->

			</div>
			<div class="clear_div">&nbsp;</div>
		</li>

	</ul>
</div>