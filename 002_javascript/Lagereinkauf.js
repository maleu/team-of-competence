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
function bestellungProduktnummerSuchen(){
	var prodNummer = $('#lagerProduktnummer').val();
	var prodName = $('#lagerProduktname').val();
	$.ajax({
		type: "POST",
		url: self + "../ERP/kundenBestellungTabelle.php",
		beforeSend: function() {	
			$('#bestelldatenBestellungTabelleBody').html(loadingImageTag);
		},
		data: {		
			prodNummer: prodNummer,
			prodName: prodName
		}
	}).done(function( msg ) {
		$('#bestelldatenBestellungTabelleBody').html(msg);
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
function artikelEdit(divId, i, art){
	preValue = $(divId).attr("data");
	pro = $('#produktNummer'+i).attr('data');
	$(divId).html("<input type='text' name='changeValue' id='changeValue' value="+preValue+" style='width:100px;'>");
	$('#changeValue').focus();   
	$('#changeValue').blur(function() {
		doUpdateArtikel(divId, preValue, art, pro);
	}).keypress(function(e){
		if ( e.keyCode == 13 ){
			$(this).blur();
		}
	});
}
function doUpdateArtikel(divId, preValue, art, pro){
	value = $('#changeValue').val();
	if (value == undefined || value == ""){
		$(divId).html(preValue);
	}else{
		$(divId).html(value);
		$(divId).attr("data", value);
		$.ajax({
		type: "POST",
		url: self + "../ERP/ArtikelUpdate.php",
		beforeSend: function() {	
		},
		data: {		
			value:value,
			art:art,
			pro:pro
		}
		}).done(function( msg ) {
			$.growlUI('Artikel wurde editiert.');
		});
	}
}

function artikelNew(){
	$.ajax({
		type: "POST",
		url: self + "../ERP/EinkaufInsertTabelle.php",
		beforeSend: function() {	
			$('#artikelVerwaltung').html(loadingImageTag);
		},
		data: {		
		}
	}).done(function( msg ) {
		$('#artikelVerwaltung').html(msg);
	});
}
function doArtikelInsert(){
	produktBezeichnung = $('#produktBezeichnungbtn').val();
	einkaufspreis = $('#nettoPreisbtn').val();
	bestand = $('#bestandbtn').val();
	verkaufspreis = $('#verkaufsPreisbtn').val();
	lieferant = $('#lieferantbtn').val();
	$.ajax({
	type: "POST",
	url: self + "../ERP/ArtikelInsert.php",
	beforeSend: function() {	
	},
	data: {	
		produktBezeichnung:produktBezeichnung,
		einkaufspreis:einkaufspreis,
		bestand:bestand,
		verkaufspreis:verkaufspreis,
		lieferant:lieferant
	}
	}).done(function( msg ) {
		$('#artikelVerwaltung').html(msg);
		$.growlUI('Artikel wurde erstellt.');
	});
}
function doArtikelDelete(i){
	produktNummer = $('#produktNummer'+i).val();
	$.ajax({
	type: "POST",
	url: self + "../ERP/ArtikelDelete.php",
	beforeSend: function() {	
	},
	data: {		
		pro:produktNummer
	}
	}).done(function( msg ) {
		$('#artikelVerwaltung').html(msg);
		$.growlUI('Artikel wurde gel&ouml;scht.');
	});
}

function bestellungUebernehmen(i){
// prodNummer, prodName, nettoPreis, i, lieferant
	pro = $('#produktNummer'+i).attr('data');
	bestand = $('#bestand'+i).attr('data');
	produktBezeichnung = $('#produktBezeichnung'+i).attr('data');
	nettopreis = $('#nettoPreis'+i).attr('data');
	menge = $('#lagerMenge'+i).val();
	geld = parseFloat(menge)*parseFloat(nettopreis);
	$.growlUI('Es wurden '+menge+' Produkte von '+ produktBezeichnung+' f&uuml;r insgesamt '+geld+'EUR bestellt');
	$.ajax({
		type: "POST",
		url: self + "../ERP/kundenBestellungInsert.php",
		beforeSend: function() {	
			$('#kundenBestellungTabelleBody').html(loadingImageTag);
		},
		data: {		
			pro: pro,
			bestand: bestand,
			menge: menge
		}
	}).done(function( msg ) {
		$('#kundenBestellungTabelleBody').html(msg);
	});
}


function einkaufUebernehmen(i){
// prodNummer, prodName, nettoPreis, i, lieferant
	pro = $('#produktNummer'+i).attr('data');
	bestand = $('#bestand'+i).attr('data');
	produktBezeichnung = $('#produktBezeichnung'+i).attr('data');
	nettopreis = $('#nettoPreis'+i).attr('data');
	menge = $('#lagerMenge'+i).val();
	geld = parseFloat(menge)*parseFloat(nettopreis);
	$.growlUI('Es wurden '+menge+' Produkte von '+ produktBezeichnung+' f&uuml;r insgesamt '+geld+'EUR gekauft');
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