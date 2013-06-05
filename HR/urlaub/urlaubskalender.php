<?php

include('lang.inc.php');
include('conf.inc.php');
include('mysql.inc.php');
include_once('functions.inc.php');


connect_db($mysql['hostname'], $mysql['user'], $mysql['pass'], $mysql['db']);

$cyear = escape_cyear();

if (isset($_POST['Submit']) && isset($_POST['stan']))update_db($_POST, $cyear);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>Urlaubskalender</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="admin.css" type="text/css" charset="utf-8" />
  <script language="javascript" src="ks.js"></script>
</head>
<body>

<div id="content">


<?php include('conf.inc.php'); ?>


<p>Zum editieren bitte auf die entsprechende Zelle klicken, Nachnamen und Status eingeben und auf abschicken klicken. Schönen Urlaub!</p>
<form name="myform" method="post">
<?php calendar($cyear, 1); ?>
</form>


</div>

</div>

</body>
</html>

