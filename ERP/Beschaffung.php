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
	<div class=lagerNavElement>
		Bestellung <br />aufnehmen
	</div>
	<div class=lagerNavElement>
		Auftragsbest&auml;tigung <br />digitalisieren
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
				L&ouml;schen
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
	</div></div>
	<div class=Body>
		<b>Bestellstatus abrufen</b>
		<div class=lagerBodyBestellungStatus>
			<input type="text" id="lagerProduktnummer" size="50" value="Bestellnummer eingeben..."  />
            
			<input type="button" id="..." value="Status abrufen" onclick="...()" /><br>
            Status: Bestellung wurde versand</br>
            </div>
            
            
<b>Bestellung stornieren</b>
	  <div class=lagerBodyStornierenStatus>
			<input type="text" id="..." size="50" value="Bestellnummer eingeben..."  />
            
		<input type="button" id="..." value="Suchen" onclick="...()" /><br>           
            Bestellungnummer: 6464644664      <br>Bestelldatum:  28.April 2013
Bestellung durch:  Naturgrün GmbH</br>

	<input type="button" id="..." value="Bestellung stornieren" onclick="...()" /><br>         
</div>
            
     <b>Bestellung bearbeiten</b>
	  <div class=lagerBodyBestellungBearbeiten>
			<input type="text" id="..." size="50" value="Bestellnummer eingeben..."  />
            
			<input type="button" id="..." value="Suchen" onclick="...()" /><br>           
            Bestellungnummer: 6464644664      <br>Bestelldatum:  28.April 2013
Bestellung durch:  Naturgrün GmbH</br>

	<input type="button" id="..." value="Bestellung korrigieren" onclick="...()" />
   <br>     Bestellnummer: <input type="text" id="..." size="50" value="..."  />  
   
   
     <br>     Lieferanschrift: <input type="text" id="..." size="50" value="..."  />
     
       <br>     Artikelliste: <input type="text" id="..." size="50" value="..."  />  
       <br>
       <input type="button" id="..." value="Änderung speichern" onclick="...()" />
   <br>     
</div>       
        
        
 <b>Paketschein drucken</b>
	  <div class=lagerBodyPaketscheinDrucken>
			<input type="text" id="..." size="50" value="Paketnummer eingeben..."  />
            
			<input type="button" id="..." value="Suchen" onclick="...()" /><br>           
            Paketnummer: 229293832882</br>

	<input type="button" id="..." value="Paketschein drucken" onclick="...()" /><br>         
</div>    
            
<b>Lieferschein drucken</b>
		<div class=lagerBodyLieferscheinDrucken>
			<input type="text" id="..." size="50" value="Lieferscheinnummer eingeben..."  />
            
			<input type="button" id="..." value="Suchen" onclick="...()" /><br>           
            Lieferscheinnummer: 222444939382

	        <input type="button" id="..." value="Lieferschein drucken" onclick="...()" /><br>         
</div>
            
<b>Lagerbestand korrigieren</b>
		<div class=lagerBodyLagerbestandKorrigieren>
			<input type="text" id="..." size="50" value="Produktnummer eingeben..."  />
            
			<input type="button" id="..." value="Suchen" onclick="...()" /><br>           
            <div class=lagerBestellungTabelleElement>
					Produktnummer
				</div>
				<div class=lagerBestellungTabelleElement>
					Produktbezeichnung
				</div>
				
				<div class=lagerBestellungTabelleElement>
					Menge
				</div>
				
			
			<div class=lagerBestellungTabelleBody>
				wird ersetzt.
			</div>
			
			<b>

	<input type="button" id="..." value="Änderung speichern" onclick="...()" /><br>         
</div>



<b>Rechnung drucken</b>
		<div class=lagerBodyRechungDrucken>
			<input type="text" id="..." size="50" value="Rechungsnummer eingeben..."  />
            
			<input type="button" id="..." value="Suchen" onclick="...()" /><br>           
            Rechnungsnummer: 222444939382

	        <input type="button" id="..." value="Rechnung drucken" onclick="...()" /><br>         
</div>


<b>Warenausgang melden</b>
		<div class=lagerBodyWarenausgangMelden>
			<input type="text" id="..." size="50" value="Bestellnummer eingeben..."  />
            
			<input type="button" id="..." value="Suchen" onclick="...()" /><br>           
            Bestellung: 222444939382

	        <input type="button" id="..." value="Paket übergeben" onclick="...()" /><br>Bestellvorgang abgeschlossen.         
</div>
  </div>
            
            
            
			
			