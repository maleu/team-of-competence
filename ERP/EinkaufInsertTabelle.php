<?php
include_once ('db_connect.php');
echo'
	<div class=lagerBestellungTabelleZeile>
		<div class=lagerBestellungTabelleBElement id="produktNummer">
			
		</div>
		<div class=lagerBestellungTabelleBElement id="produktBezeichnung">
			<input style="width:100px;" type="text" id="produktBezeichnungbtn" value=""/>
		</div>
		<div class=lagerBestellungTabelleBElement id="nettoPreis">
			<input style="width:100px;" type="text" id="nettoPreisbtn" value=""/>
		</div>
		<div class=lagerBestellungTabelleBElement id="bestand">
			<input style="width:100px;" type="text" id="bestandbtn" value=""/>
		</div>
		<div class=lagerBestellungTabelleBElement id="verkaufsPreis">
			<input style="width:100px;" type="text" id="verkaufsPreisbtn" value=""/>
		</div>
		<div class=lagerBestellungTabelleBElement id="lieferant">
			<input style="width:100px;" type="text" id="lieferantbtn" value=""/>
		</div>
		<div class=lagerBestellungTabelleBElement id="arterstellen">
			<input style="width:100px;" type="button" id="arterstellenbtn" value="erstellen" onclick="doArtikelInsert()"/>
		</div>
	</div>
';

?>