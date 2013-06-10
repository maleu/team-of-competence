<?php
		include("../002_javascript/Lagereinkauf.js");
		ini_set ("display_errors", "1");
		error_reporting(E_ALL);
	?>
<div class=lagerNav>
	<div class=lagerNavElement>
		Startseite
	</div>
	<div class=lagerNavElement>
		Kalender
	</div>
	<div class=lagerNavElement>
		Posteingang
	</div>
</div>
<div class=lagerMain>
	<div class=lagerHeader>
		<div class=lagerHeaderRechts>
			<div class=lagerHeaderElement>
				Drucken
			</div>
			<div class=lagerHeaderElement>
				Hilfe
			</div>
		</div>
	</div>
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
					Produktnummer
				</div>
				<div class=lagerBestellungTabelleHElement>
					Produkt-<br />bezeichnung
				</div>
				<div class=lagerBestellungTabelleHElement>
					Nettopreis
				</div>
				<div class=lagerBestellungTabelleHElement>
					Menge
				</div>
				<div class=lagerBestellungTabelleHElement>
					Lieferant
				</div>
			</div>
			<div id=lagerBestellungTabelleBody class=lagerBestellungTabelleBody>
				wird ersetzt.
			</div>
			<div style="clear:both;">
			<b>Zusammenfassung</b>
			</div>
			<div class=lagerBestellungTabelleHeader>
				<div class=lagerBestellungTabelleHElement>
					Produktnummer
				</div>
				<div class=lagerBestellungTabelleHElement>
					Produkt-<br />bezeichnung
				</div>
				<div class=lagerBestellungTabelleHElement>
					Nettopreis
				</div>
				<div class=lagerBestellungTabelleHElement>
					Menge
				</div>
				<div class=lagerBestellungTabelleHElement>
					Lieferant
				</div>
			</div>
			<div id=lagerZusammenfassungTabelleBody class=lagerZusammenfassungTabelleBody>
				wird ersetzt.
			</div>
			<div id="lagerBestellungAbschicken">
				<input type="button" id="einkaufBestellen" value="Bestellen" />
			</div>
		</div>
	</div>
</div>
