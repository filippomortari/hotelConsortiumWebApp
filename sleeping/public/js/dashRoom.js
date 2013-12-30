$("#camere-struttura").click(function(){
	$.ajax({
		type : 'POST',
		url : "index.php",
		data : {
			o: 'RetrivieRoom'
		},
		success : function(data) {
			// carico i css style
			if ( data.css != false){
				$.each(data.css, function(i, item) {
					var headID = document.getElementsByTagName("head")[0];
					var cssNode = document.createElement('link');
					cssNode.type = 'text/css';
					cssNode.rel = 'stylesheet';
					cssNode.href = item;
					cssNode.media = 'screen';
					headID.appendChild(cssNode);
				});
			}
			
			if( data.js != false){
			// inserisco gli script
				$.each(data.js, function(i, item) {
					var headID = document.getElementsByTagName("head")[0];
					var newScript = document.createElement('script');
					newScript.type = 'text/javascript';
					newScript.src = item;
					headID.appendChild(newScript);
				});
			}
			
			if(data.tabs_html != false){
				$('#tab-contents').empty();
				$('#tab-contents').append(data.tabs_html);
			}
			else{
				$('#tab-contents').empty();
				$('#tab-contents').append(data.html);
			}
		},
		dataType:"json"
	});// AJAX CLOSED
});