<html>
<head>
<link href="Lagereinkauf.css" rel="stylesheet" type="text/css">
</head>
<body>
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
	<div class=lagerNavElement>
		Bestellung <br />aufnehmen
	</div>
	<div class=lagerNavElement>
		Auftragsbestätigung <br />digitalisieren
	</div>
	<div class=lagerNavElement>
		Lieferschein <br />digitalisieren
	</div>
</div>
<div class=lagerMain>
	<div class=lagerHeader>
		<div class=lagerHeaderLinks>
			<div class=lagerHeaderElement>
				Speichern
			</div>
			<div class=lagerHeaderElement>
				Neu
			</div>
			<div class=lagerHeaderElement>
				Löschen
			</div>
		</div>
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
			<input type="text" id="lagerProduktnummer" size="50" value="Produktnummer eingeben..." />
			<input type="button" id="lagerProduktnummerSuchen" value="Suchen" />
			<div class=lagerBestellungTabelleHeader>
				<div class=lagerBestellungTabelleHeaderElement>
					Produktnummer
				</div>
				<div class=lagerBestellungTabelleHeaderElement>
					Produktbezeichnung
				</div>
				<div class=lagerBestellungTabelleHeaderElement>
					Nettopreis
				</div>
				<div class=lagerBestellungTabelleHeaderElement>
					Menge
				</div>
				<div class=lagerBestellungTabelleHeaderElement>
					Lieferant
				</div>
			</div>
			<div class=lagerBestellungTabelleBody>
				wird ersetzt.
			</div>
			
			Zusammenfassung
			<div class=lagerZusammenfassungTabelleHeader>
				<div class=lagerZusammenfassungTabelleHeaderElement>
					Position
				</div>
				<div class=lagerZusammenfassungTabelleHeaderElement>
					Produktnummer
				</div>
				<div class=lagerZusammenfassungTabelleHeaderElement>
					Produktbezeichnung
				</div>
				<div class=lagerZusammenfassungTabelleHeaderElement>
					Nettopreis
				</div>
				<div class=lagerZusammenfassungTabelleHeaderElement>
					Menge
				</div>
				<div class=lagerZusammenfassungTabelleHeaderElement>
					Lieferant
				</div>
			</div>
			<div class=lagerZusammenfassungTabelleBody>
				wird ersetzt.
			</div>
			
			<input type="button" id="einkaufBestellen" value="Bestellen" />
		</div>
	</div>
</div>
</body>
</html>