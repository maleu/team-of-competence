<?php
		include("../002_javascript/Lagereinkauf.js");
		ini_set ("display_errors", "1");
		error_reporting(E_ALL);
	?>
    <link rel="stylesheet" type="text/css" href="Lagereinkauf.css">
    
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
	</div>
    
	<div class=Body>
    
    
    
    <div class=lagerBodyBestellungStatus>
        <b>Bestellstatus abrufen</b><br /><br />
	  <input type="text" id="lagerProduktnummer" size="50" value="Bestellnummer eingeben..." onblur="if (this.value == '') {this.value = 'Bestellnummer eingeben...';}"
				onfocus="if (this.value == 'Bestellnummer eingeben...') {this.value = '';}" />
            
			<input type="button" id="..." value="Status abrufen" onclick="...()" /><br>
            <br />
            Status: Bestellung wurde versand<br />
            </div>
            
            

	  <div class=lagerBodyStornierenStatus>
      <b>Bestellung stornieren</b><br><br />
			<input type="text" id="..." size="50" value="Bestellnummer eingeben..."
            onblur="if (this.value == '') {this.value = 'Bestellnummer eingeben...';}"
				onfocus="if (this.value == 'Bestellnummer eingeben...') {this.value = '';}"
                  />
            
		<input type="button" id="..." value="Suchen" onclick="...()" /><br>   <br />        
            Bestellungnummer: 6464644664      <br>Bestelldatum:  28.April 2013<br />
Bestellung durch:  Naturgrün GmbH</br>

	<input type="button" id="..." value="Bestellung stornieren" onclick="...()" /><br>         

</div>
            
	  <div class=lagerBodyBestellungBearbeiten>
			     <b>Bestellung bearbeiten</b><br /><br />

<input type="text" id="..." size="50" value="Bestellnummer eingeben..." 
            onblur="if (this.value == '') {this.value = 'Bestellnummer eingeben...';}"
				onfocus="if (this.value == 'Bestellnummer eingeben...') {this.value = '';}" />
            <br />
			<input type="button" id="..." value="Suchen" onclick="...()" /><br>  <br />         
            Bestellungnummer: 6464644664      <br>Bestelldatum:  28.April 2013
Bestellung durch:  Naturgrün GmbH</br>

	<input type="button" id="..." value="Bestellung korrigieren" onclick="...()" />
   <br>     Bestellnummer: <input type="text" id="..." size="50" value="..." 
   onblur="if (this.value == '') {this.value = '...';}"
				onfocus="if (this.value == '...') {this.value = '';}" />  
   
   
     <br>     Lieferanschrift: <input type="text" id="..." size="50" value="..." 
     onblur="if (this.value == '') {this.value = '...';}"
				onfocus="if (this.value == '...') {this.value = '';}" />
     
       <br>     Artikelliste: <input type="text" id="..." size="50" value="..."  
       onblur="if (this.value == '') {this.value = '...';}"
				onfocus="if (this.value == '...') {this.value = '';}" />  
       <br><br />
       <input type="button" id="..." value="Änderung speichern" onclick="...()" />
   <br>     

</div>       
        
      <div class=wrapper>
	  <div class=lagerBodyPaketscheinDrucken>
		 <b>Paketschein drucken</b><br />
<br />

	<input type="text" id="..." size="50" value="Paketnummer eingeben..." 
            onblur="if (this.value == '') {this.value = 'Paketnummer eingeben...';}"
				onfocus="if (this.value == 'Paketnummer eingeben...') {this.value = '';}" /><br /><br />
            
			<input type="button" id="..." value="Suchen" onclick="...()" /><br>  <br />         
            Paketnummer: 229293832882</br><br />
<br />
	<input type="button" id="..." value="Paketschein drucken" onclick="...()" /><br>         

</div>    
            
		<div class=lagerBodyLieferscheinDrucken>
		<b>Lieferschein drucken</b><br /><br />

	<input type="text" id="..." size="50" value="Lieferscheinnummer eingeben..." 
            onblur="if (this.value == '') {this.value = 'Lieferscheinnummer eingeben...';}"
				onfocus="if (this.value == 'Lieferscheinnummer eingeben...') {this.value = '';}" />
            <br /><br />
			<input type="button" id="..." value="Suchen" onclick="...()" /><br>  <br />         
            Lieferscheinnummer: 222444939382
<br /><br />
	        <input type="button" id="..." value="Lieferschein drucken" onclick="...()" /><br>         
</div>
            </div>
	  <div class=lagerBodyLagerbestandKorrigieren>
			<b>Lagerbestand korrigieren</b><br /><br />

<input type="text" id="..." size="50" value="Produktnummer eingeben..." 
            onblur="if (this.value == '') {this.value = 'Produktnummer eingeben...';}"
				onfocus="if (this.value == 'Produktnummer eingeben...') {this.value = '';}" />
            
			<input type="button" id="..." value="Suchen" onclick="...()" /><br /><br />
			<br>           
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
			
			

	<input type="button" id="..." value="Änderung speichern" onclick="...()" /><br>         
</div>


<div class=wrapper1>
	<div class=lagerBodyRechungDrucken>
		<b>Rechnung drucken</b><br /><br />

	<input type="text" id="..." size="50" value="Rechnungsnummer eingeben..." 
            onblur="if (this.value == '') {this.value = 'Rechnungsnummer eingeben...';}"
				onfocus="if (this.value == 'Rechnungsnummer eingeben...') {this.value = '';}"  />
	<br /><br />
			<input type="button" id="..." value="Suchen" onclick="...()" /><br> <br />          
            Rechnungsnummer: 222444939382
<br /><br />
	        <input type="button" id="..." value="Rechnung drucken" onclick="...()" /><br>        
</div>


		<div class=lagerBodyWarenausgangMelden>
			<b>Warenausgang melden</b><br />

<br /><input type="text" id="..." size="50" value="Bestellnummer eingeben..." 
            onblur="if (this.value == '') {this.value = 'Bestellnummer eingeben...';}"
				onfocus="if (this.value == 'Bestellnummer eingeben...') {this.value = '';}" />
            <br /><br />
			<input type="button" id="..." value="Suchen" onclick="...()" /><br>  <br />         
            Bestellung: 222444939382
            <br /><br />

	        <input type="button" id="..." value="Paket übergeben" onclick="...()" /><br><br />Bestellvorgang abgeschlossen.         
</div>
</div>
  </div>
            
     
          
			
			