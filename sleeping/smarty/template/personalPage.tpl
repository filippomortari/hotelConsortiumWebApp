<div id="dataWrapper">
<input type="hidden" id="check-in" value="{$checkIn}" />
<input type="hidden" id="check-out" value="{$checkOut}" />
	<div id="headerWrapper">
		<div id="logo">
			<img src="{$logo}" />
		</div>
		<div id="datiGenerali">
			<div id="nomeStruttura">
				<h1>{$struttura['nome']}</h1>
			</div>
			<div id="datiStruttura">
				<span id="datiContatto">
					<p class="label">tel: {$struttura['contatti']['telefono']}</p>
					<p class="label">cel: {$struttura['contatti']['mobile']}</p>
					<p class="label">fax: {$struttura['contatti']['fax']}</p>
					<p class="label">mail: {$struttura['contatti']['email']}</p>
				</span>
				<span id="datiIndirizzo">
					<p class="label">via: {$struttura['sedeLegale']['via']}, {$struttura['sedeLegale']['numCiv']}</p>
					<p class="label">citt&agrave;: {$struttura['sedeLegale']['citta']}</p>
				</span>
			</div>
		</div>
	</div> 
	
	<div id="gallery">
		<h2>Foto Gallery</h2>
		{foreach from=$fotoGallery item=foto}
			<span class="fotoWrapper">
				<img class="fotoGallery" src="{$foto}" />
			</span>
		{/foreach}
	</div>
	
	<div class="clear">&nbsp;</div>
	
	<div id="camere">
		<h2>Camere</h2>
	
		{foreach from=$camere item=camera}
			<div class="datiCameraWrapper">
				<form id="cameraSelezionata">
					<div class="checkBox">
						<input type="radio" name="camera" value="{$camera['ID']}" />
					</div>
					<div class="datiCamera">
						<p class="label">Posti:</p> <p class="value">{$camera['posti']}</p>
						<p class="label">Descrizione:</p> <p class="value">{$camera['descrizione']}</p>
						<p class="label">Prezzo:</p> <p class="value">{$camera['prezzo']['value']}</p>
					</div>
				</form>
			</div>
		{/foreach}
	
	</div>
	
	<p class="my-btn" id="prenota"> Prenota </p>
	<div id="prenotazioneMsg" title="date errate" style="display: none">
	    <p>
	    	Prenotazione effettuata con successo
	    </p>
	</div>
	<div id="prenotazioneNoMsg" title="date errate" style="display: none">
	    <p>
	    	Prenotazione non andata a buon fine
	    </p>
	</div>
</div>