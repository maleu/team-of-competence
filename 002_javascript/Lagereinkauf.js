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
function lagerArtikelnummerSuchen(){
	var prodNummer = $('#lagerArtikelnummer').val();
	var prodName = $('#lagerArtikelname').val();
	$.ajax({
		type: "POST",
		url: self + "../ERP/ArtikelverwaltungTabelle.php",
		beforeSend: function() {	
			$('#artikelVerwaltung').html(loadingImageTag);
		},
		data: {		
			prodNummer: prodNummer,
			prodName: prodName
		}
	}).done(function( msg ) {
		$('#artikelVerwaltung').html(msg);
	});
	
}
function artikelEdit(divId){
	preValue = $(divId).attr("data");
	$(divId).html("<input type='text' name='changeValue' id='changeValue' value="+preValue+" style='width:100px;'>");
	$('#changeValue').focus();   
	$('#changeValue').blur(function() {
		doUpdateArtikel(divId, preValue);
	}).keypress(function(e){
		if ( e.keyCode == 13 ){
			$(this).blur();
		}
	});
}
function doUpdateArtikel(divId, preValue){
	value = $('#changeValue').val();
	if (value == undefined || value == ""){
		$(divId).html(preValue);
	}else{
		$(divId).html(value);
		$(divId).attr("data", value);
	}
}

function einkaufUebernehmen(i){
// prodNummer, prodName, nettoPreis, i, lieferant
	pro = $('#produktNummer'+i).attr('data');
	bestand = $('#bestand'+i).attr('data');
	produktBezeichnung = $('#produktBezeichnung'+i).attr('data');
	nettopreis = $('#nettoPreis'+i).attr('data');
	menge = $('#lagerMenge'+i).val();
	geld = parseFloat(menge)*parseFloat(nettopreis);
	$.growlUI('Es wurden '+menge+' Produkte von '+ produktBezeichnung+' f&uuml; insgesamt '+geld+'EUR gekauft');
	$.ajax({
		type: "POST",
		url: self + "../ERP/EinkaufInsert.php",
		beforeSend: function() {	
			$('#lagerBestellungTabelleBody').html(loadingImageTag);
		},
		data: {		
			pro: pro,
			bestand: bestand,
			menge: menge
		}
	}).done(function( msg ) {
		$('#lagerBestellungTabelleBody').html(msg);
	});
}



</script>