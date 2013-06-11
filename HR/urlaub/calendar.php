<?php

include('/HR/urlaub/lang.inc.php');
include('/HR/urlaub/conf.inc.php');
include('/HR/urlaub/mysql.inc.php');
include('/HR/urlaub/functions.inc.php');

connect_db($mysql['hostname'], $mysql['user'], $mysql['pass'], $mysql['db']);

$cyear = escape_cyear();

calendar($cyear);

?>
