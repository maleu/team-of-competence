<script>
var self = "http://" + window.location.hostname + "/";
var loadingImageTag = '<img src="'+self+'../001_images/load_blue.gif" />';

function lagerProduktnummerSuchen(){
	var produktnummer = $('#lagerProduktnummer').val();
	$.ajax({
		type: "POST",
		url: self + "../ERP/LagereinkaufBestellungTabelle.php",
		beforeSend: function() {	
			alert("DEBUG");
			$('#lagerBestellungTabelleBody').html(loadingImageTag);
		},
		data: {		
			produktnummer: produktnummer
		}
	}).done(function( msg ) {
	alert(msg);
		$('#lagerBestellungTabelleBody').html(msg);
	});
	
}

</script>