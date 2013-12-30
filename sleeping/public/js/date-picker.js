$(function() {
		$("#from").datepicker({
			dateFormat: "yy-mm-dd",
			showOn: "button",
            buttonImage: "./sleeping/public/img/calendar.png",
            buttonImageOnly: true,
			defaultDate : "+1w",
			changeMonth : true,
			numberOfMonths : 2,
			onClose : function(selectedDate) {
				$("#to").datepicker("option", "minDate", selectedDate);
			}
		});
		$("#to").datepicker({
			dateFormat: "yy-mm-dd",
			showOn: "button",
            buttonImage: "./sleeping/public/img/calendar.png",
            buttonImageOnly: true,
			defaultDate : "+1w",
			changeMonth : true,
			numberOfMonths : 2,
			onClose : function(selectedDate) {
				$("#from").datepicker("option", "maxDate", selectedDate);
			}
		});
});