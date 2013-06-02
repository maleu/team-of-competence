<?php
$db=include_once('/../db_connect.php');




if (mysqli_connect_errno() ==0 )
{ 
    $sql = "INSERT INTO Mitarbeiter VALUES (";
    $sql += "";
    $sql += ")";
    
    $result = mysql_query($sql);
    
    
    
    
} // end if no error
	else
	{
            echo("<div id='dbcon'>No DB Connection possible at all, error is ".mysqli_connect_errno()." : ".mysqli_connect_error()."</div>"); 
            
        }
	$db->close();
        




?>
