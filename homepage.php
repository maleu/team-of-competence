<?php
echo $role;
$mitarbeiter = "Mitarbeiter";
$topverkaufer = "Karl-Heinz-Wuppke";
$topverkaufer_umsatz = "577€";
$nachzufassen = "Werner Meier";
$nachzufassen_zeit = "17 Tage";
$rechnungen = "3";
$mahnen ="Dirk Diebisch";
$mahnen_zeit = "25 Tagen";


echo '<p>Hallo ' . $mitarbeiter . ", wie immer begrüßt Dich Dein persönliches Dashboard. Hab' einen schönen Tag!</p>";
?>

<div class="navbar-inner dashboard-div-left" id="dashboard-div-top-left">
	<h4>Nachfassungen</h4>
	<hr>
	<p>Potentieller Neukunde <strong><?php echo $nachzufassen ?></strong> erwartet eine Nachfassung. Der Erstkontakt liegt <strong> <?php echo $nachzufassen_zeit ?> </strong> zurück.</p>
</div>
<div class="navbar-inner dashboard-div-right" id="dashboard-div-top-right">
	<h4>Rechnungen & Mahnungen</h4>
	<hr>
	<p>Kunde <strong><?php echo $mahnen ?> </strong>  hat vor <strong><?php echo $mahnen_zeit ?></strong> eine Rechnung erhalten und noch nicht beglichen.</p>
</div>
<div class="navbar-inner dashboard-div-left" id="dashboard-div-row2-left">
	<h4>Top-Verkäufer</h4>
	<hr>
	<p><strong><?php echo $topverkaufer ?></strong> hat diese Woche mit einem Umsatz von <strong> <?php echo $topverkaufer_umsatz ?> </strong> die Nase vorn.</p>
</div>
<div class="navbar-inner dashboard-div-right" id="dashboard-div-row2-right">
	<h4>Finanzbuchhaltung</h4>
	<hr>
	<p>Der Erste des Monats naht - Gehaltsüberweisungen vorbereiten.</p>
	<p>Wir haben noch <strong><?php echo $rechnungen ?> Rechnungen zu begleichen</strong>.</p>
</div>