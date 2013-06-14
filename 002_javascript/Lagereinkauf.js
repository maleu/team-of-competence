<script>
var self = "http://" + window.location.hostname + "/";
var loadingImageTag = '<img src="'+self+'../001_images/load_blue.gif" />';

function lagerProduktnummerSuchen(){
	var prodNummer = $('#lagerProduktnummer').val();
	var prodName = $('#lagerProduktname').val();
	$.ajax({
		type: "POST",
		url: self + "../ERP/LagereinkaufBestellungTabelle.php",
		beforeSend: function() {	
			$('#lagerBestellungTabelleBody').html(loadingImageTag);
		},
		data: {		
			prodNummer: prodNummer,
			prodName: prodName
		}
	}).done(function( msg ) {
		$('#lagerBestellungTabelleBody').html(msg);
	});
	
}
function einkaufUebernehmen(){
// prodNummer, prodName, nettoPreis, i, lieferant
	alert("DEBUG");
	// divId = '#lagerMenge' + i;
	// var menge = $(divId).val();
	// $.ajax({
		// type: "POST",
		// url: self + "../ERP/LagereinkaufZusammenfassungTabelle.php",
		// beforeSend: function() {	
			// $('#lagerZusammenfassungTabelleBody').html(loadingImageTag);
		// },
		// data: {
			// prodNummer: prodNummer,
			// prodName: prodName,
			// nettoPreis: nettoPreis,
			// menge: menge, 
			// lieferant: lieferant
		// }
	// }).done(function( msg ) {
		// $('#lagerZusammenfassungTabelleBody').html(msg);
	// });
}

</script>