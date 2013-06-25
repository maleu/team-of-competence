<?php
		include("../002_javascript/Lagereinkauf.js");
		ini_set ("display_errors", "1");
		error_reporting(E_ALL);
	?>
<div class=lagerMain>
	<div class=lagerBody>
		<b>Kundendaten</b>
		<div class=lagerBodyBestellung>
			<input type="text" id="kundenId" size="50" value="Kunden ID eingeben..." 
				onblur="if (this.value == '') {this.value = 'Kunden ID eingeben...';}"
				onfocus="if (this.value == 'Kunden ID eingeben...') {this.value = '';}"/>
			<input type="text" id="kundenName" size="50" value="Kunden Namen eingeben..." 
				onblur="if (this.value == '') {this.value = 'Kunden Namen eingeben...';}"
				onfocus="if (this.value == 'Kunden Namen eingeben...') {this.value = '';}"/>
			<input type="button" id="KundenSuchen" value="Suchen" onclick="KundenSuchen()" />
			<div class=lagerBestellungTabelleHeader>
				<div class=lagerBestellungTabelleHElement>
					Kunden ID
				</div>
				<div class=lagerBestellungTabelleHElement>
					Name
				</div>
				<div class=lagerBestellungTabelleHElement>
					Adresse
				</div>
				<div class=lagerBestellungTabelleHElement>
					PLZ
				</div>
				<div class=lagerBestellungTabelleHElement>
					Ort
				</div>
			</div>
			<div id=kundendatenBestellungTabelleBody class=lagerBestellungTabelleBody>
			</div>
		</div>
	</div>
</div>
<div class=lagerMain>
	<div class=lagerBody>
		<b>Bestelldaten</b>
		<div class=lagerBodyBestellung>
			<input type="text" id="bestellungProduktnummer" size="50" value="Produktnummer eingeben..." 
				onblur="if (this.value == '') {this.value = 'Produktnummer eingeben...';}"
				onfocus="if (this.value == 'Produktnummer eingeben...') {this.value = '';}"/>
			<input type="text" id="bestellungProduktname" size="50" value="Produktnamen eingeben..." 
				onblur="if (this.value == '') {this.value = 'Produktnamen eingeben...';}"
				onfocus="if (this.value == 'Produktnamen eingeben...') {this.value = '';}"/>
			<input type="button" id="bestellungProduktnummerSuchen" value="Suchen" onclick="bestellungProduktnummerSuchen()" />
			<div class=lagerBestellungTabelleHeader>
				<div class=lagerBestellungTabelleHElement>
					Artikel ID
				</div>
				<div class=lagerBestellungTabelleHElement>
					Produkt-<br />bezeichnung
				</div>
				<div class=lagerBestellungTabelleHElement>
					Verkaufspreis
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
			<div id=bestelldatenBestellungTabelleBody class=lagerBestellungTabelleBody>
			</div>
		</div>
	</div>
</div>
