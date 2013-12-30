	<div id="gallery">
		<div id="gallery-background">
			<img src="public/img/gransasso.jpg" alt="" width="600" height="340" class="output" />
		</div>
		<div id="gallery-bgthumb">
			<ul class="thumbnails">
				<li>
					<img src="public/img/abruzzo.gif" title="prova title" alt="" width="128" height="88" />
				</li>
				<li>
					<img src="public/img/maiella.jpg" title="prova title 2" alt="" width="100" height="75" />
				</li>
				<li>
					<img src="public/img/gransasso.jpg" title="prova title 3" alt="" width="100" height="75" />
				</li>
				<li>
					<img src="public/img/LogoAbruzzo.png" title="prova title 4" alt="" width="100" height="75" />
				</li>
			</ul>
			<br class="clear" />
		</div>
		<script type="text/javascript">
				$('#gallery').gallerax({
					outputSelector: 		'.output',					// Output selector
					thumbnailsSelector:		'.thumbnails li img',		// Thumbnails selector
					fade: 					'fast',						// Transition speed (fast)
					navNextSelector:		'.nav li a.navNext',		// 'Next' selector
					navPreviousSelector:	'.nav li a.navPrevious'		// 'Previous' selector
					});
		</script>
		<!-- end -->
	</div>
	<div class="clear_div">&nbsp;</div>
	<!-- smarty per alberghi consigliati -->
	<!-- fine smarty per alberghi consigliati -->
	<div class="clear_div">&nbsp;</div>
