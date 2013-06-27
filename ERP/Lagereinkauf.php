<?php
		include("../002_javascript/Lagereinkauf.js");
		ini_set ("display_errors", "1");
		error_reporting(E_ALL);
	?>
<div class=lagerMain>
	<div class=lagerBody>
		<b>Bestellung aufnehmen</b>
		<div class=lagerBodyBestellung>
			<input type="text" id="lagerProduktnummer" size="50" value="Produktnummer eingeben..." 
				onblur="if (this.value == '') {this.value = 'Produktnummer eingeben...';}"
				onfocus="if (this.value == 'Produktnummer eingeben...') {this.value = '';}"/>
			<input type="text" id="lagerProduktname" size="50" value="Produktnamen eingeben..." 
				onblur="if (this.value == '') {this.value = 'Produktnamen eingeben...';}"
				onfocus="if (this.value == 'Produktnamen eingeben...') {this.value = '';}"/>
			<input type="button" id="lagerProduktnummerSuchen" value="Suchen" onclick="lagerProduktnummerSuchen()" />
			<div class=lagerBestellungTabelleHeader>
				<div class=lagerBestellungTabelleHElement>
					Artikel ID
				</div>
				<div class=lagerBestellungTabelleHElement>
					Produkt-<br />bezeichnung
				</div>
				<div class=lagerBestellungTabelleHElement>
					Einkaufspreis
				</div>
				<div class=lagerBestellungTabelleHElement>
					Bestand
				</div>
				<div class=lagerBestellungTabelleHElement>
					Menge
				</div>
				<div class=lagerBestellungTabelleHElement>
					Lieferant
				</div>
			</div>
			<div id=lagerBestellungTabelleBody class=lagerBestellungTabelleBody>
			</div>
		</div>
	</div>
</div>
<div class=lagerMain>
	<div class=lagerBody>
		<b>Artikelverwaltung</b>
		<div class=lagerBodyBestellung>
			<input type="text" id="lagerArtikelnummer" size="50" value="Produktnummer eingeben..." 
				onblur="if (this.value == '') {this.value = 'Produktnummer eingeben...';}"
				onfocus="if (this.value == 'Produktnummer eingeben...') {this.value = '';}"/>
			<input type="text" id="lagerArtikelname" size="50" value="Produktnamen eingeben..." 
				onblur="if (this.value == '') {this.value = 'Produktnamen eingeben...';}"
				onfocus="if (this.value == 'Produktnamen eingeben...') {this.value = '';}"/>
			<input type="button" id="lagerArtikelnummerSuchen" value="Suchen" onclick="lagerArtikelnummerSuchen()" />
			<input type="button" id="artikelInsert" value="Neuer Artikel" onclick="artikelNew()" />
			<div class=lagerBestellungTabelleHeader>
				<div class=lagerBestellungTabelleHElement>
					Artikel ID
				</div>
				<div class=lagerBestellungTabelleHElement>
					Produkt-<br />bezeichnung
				</div>
				<div class=lagerBestellungTabelleHElement>
					Einkaufspreis
				</div>
				<div class=lagerBestellungTabelleHElement>
					Bestand
				</div>
				<div class=lagerBestellungTabelleHElement>
					Verkaufspreis
				</div>
				<div class=lagerBestellungTabelleHElement>
					Lieferant
				</div>
			</div>
			<div id=artikelVerwaltung class=lagerBestellungTabelleBody>
			</div>
		</div>
	</div>
</div>