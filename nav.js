<script>
//  JavaScript Document

var self = "http://" + window.location.hostname + "/";
var loadingImageTag = '<img src="'+self+'001_images/load_blue.gif" />';

function loadHomepage(){
	$.ajax({
	type: "POST",
	url: self + "homepage.php",
	beforeSend: function() {						
		$('#content').html(loadingImageTag);
	},
	data: {					
		test: 5
	}
}).done(function( msg ) {
	$('#content').html(msg);
});		
}

function loadCRMmain(id){
	$.ajax({
	type: "POST",
	url: self + "CRM/index.php",
	beforeSend: function() {						
		$('#content').html(loadingImageTag);
	},
	data: {					
		test: id
	}
}).done(function( msg ) {
	$('#content').html(msg);
});		
};

function loadCRMtest(){
	$.ajax({
	type: "POST",
	url: self + "CRM/test.php",
	beforeSend: function() {						
		$('#content').html(loadingImageTag);
	},
	data: {					
		test: 23
	}
}).done(function( msg ) {
	$('#content').html(msg);
});		
}

function crm_openClientbyID(){
	id = document.getElementById('crm_input_clientID').value;
	$.ajax({
	type: "POST",
	url: self + "CRM/index.php",
	beforeSend: function() {						
		$('#content').html(loadingImageTag);
	},
	data: {					
		P_id: id
	}
}).done(function( msg ) {
	$('#content').html(msg);
});		
}

</script>
