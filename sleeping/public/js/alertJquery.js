 function myAlert(msg) {
        msg.dialog({
        	modal: true,
        	buttons: {
        Ok: function() {
            $( this ).dialog( "close" );
            }
        }
    });
 }