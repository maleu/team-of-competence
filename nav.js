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
};

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

function crm_createClient(){
	$.ajax({
	type: "POST",
	url: self + "CRM/crm_neukunde.php",
	beforeSend: function() {						
		$('#content').html(loadingImageTag);
	},
	data: {					
		
	}
}).done(function( msg ) {
	$('#content').html(msg);
	
});		
}

function crm_createClientSubmit(){
	vorname = document.getElementById('crm_input_Vorname').value;
	nachname = document.getElementById('crm_input_Nachname').value;
	firma = document.getElementById('crm_input_Firma').value;
	strasse = document.getElementById('crm_input_StrNr').value;
	postleitzahl = document.getElementById('crm_input_PLZ').value;
	ort = document.getElementById('crm_input_Ort').value;
	tel = document.getElementById('crm_input_Telefon').value;
	email = document.getElementById('crm_input_eMail').value;

	$.ajax({
	type: "POST",
	url: self + "CRM/crm_created.php",
	beforeSend: function() {						
		$('#content').html(loadingImageTag);
	},
	data: {					
		P_vorname: vorname, P_nachname: nachname, P_firma: firma, P_str: strasse, P_plz: postleitzahl, P_ort: ort, P_tel: tel, P_email: email
	}
}).done(function( msg ) {
	$('#content').html(msg);
});		
};

</script>
