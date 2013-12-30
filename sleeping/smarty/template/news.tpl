<li>
	<div id="news">
		{foreach from=$news item=notizia}
			<div class="notizia">
				<h2 class="titolo">{$notizia['titolo']}</h2>
				<p class="testo">
					{$notizia['testo']}
				</p>
			</div>
		{/foreach}
	</div>
</li>