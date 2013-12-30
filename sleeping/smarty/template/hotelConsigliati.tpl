<div id="hotelConsigliati">
	{foreach from=$hotels item=hotel}
		<div class="hotelWrapper">
			<h2 class="nomeHotelHome">
				{$hotel['nomeHotel']}
			</h2>
			<p class="descrizioneHotelHome">
				{$hotel['descrizioneHotel']}
			</p>
		</div>
	{/foreach}
</div>