<div class="hotelsWrapper">
{foreach $data as $struttura}
	<fieldset class="fieldSetHotel">
		<div class="infoWrapper">
			<div class="infoHeader">
				<div class="logo">
					<img src="{$struttura['logo']}" />
				</div>
				<div class="nomeHotel">
					<h1 class="gotToHotelPage">{$struttura['nome']}</h1>
					<input type="hidden" value="{$struttura['ID']}" />
				</div>
				<div class="stelle">
					<span>
					{for $stelle=1 to $struttura['stelle']}
						<img src="./sleeping/public/img/starHotelGreen.png" />
					{/for}
					</span>
				</div>
			</div>
			<div class="datiWrapper">
				<div class="datiIndirizzo">
					<p class="dataLabel">Via:</p> <p> {$struttura['sedeLegale']['via']}</p>
					<p class="dataLabel">Numero Civico:</p> <p> {$struttura['sedeLegale']['numCiv']}</p>
					<p class="dataLabel">Citta:</p> <p> {$struttura['sedeLegale']['citta']}</p>
				</div>
				<div class="datiContatto">
					<p class="dataLabel">Telefono:</p> <p> {$struttura['contatti']['telefono']}</p>
					<p class="dataLabel">Cellulare:</p> <p> {$struttura['contatti']['mobile']}</p>
					<p class="dataLabel">Fax:</p> <p> {$struttura['contatti']['fax']}</p>
					<p class="dataLabel">Email:</p> <p> {$struttura['contatti']['email']}</p>
				</div>
				<div class="datiFiscaliWrapper">
					<p class="dataLabel">Codice Fiscale:</p> <p> {$struttura['cf']}</p>
					<p class="dataLabel">Partita Iva:</p> <p> {$struttura['pIva']}</p> 
				</div>
			</div>
		</div>
	</fieldset>
{/foreach}
</div>
<div id="loadScript">
	<script type="text/javascript">
		$(function() {
			$("#tabs").tabs();
			// fix the classes
			$(".tabs-bottom .ui-tabs-nav, .tabs-bottom .ui-tabs-nav > *").removeClass(
					"ui-corner-all ui-corner-top").addClass("ui-corner-bottom");
			// move the nav to the bottom
			$(".tabs-bottom .ui-tabs-nav").appendTo(".tabs-bottom");
		});
	</script>

</div>