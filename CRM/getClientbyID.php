<?php 
$db = @new mysqli('localhost', 'web27', 'Boss1337', 'usr_web27_XXX'); //DB FEHLT NOCH!!
if (mysqli_connect_errno() ==0 )
{ 
	$sql = "SELECT * FROM clients WHERE id=".$id;
	$result=$db->prepare($sql);
	$result->execute();
	$result->bind_result($id, $nname, $vname, $etc);
	  while ($result->fetch()){
		   ?> 
		   <div id='kundenprofil'>
			<ul id="profile_ul">
				<?php
				echo("<li>Name: ".$vname." ".$nname."</li>");
				echo("<li>Adresse: ".$str." ".$strnr."</li>");
				?>
			</ul>
	</div>
	<div id='kaufhistorie'>
		
	</div>
	<div id='kontaktverlauf'>
		
	</div>
            <div class="content-div">
              <div class="content-div-header"><?php 
			  echo("# ".$id." |<span class='rated' id=rate-".$id."> Rated: ");
			  echo("<a href=javascript:void(0) onclick='minusOne(".$id.");'> -- </a> ".$rating."<a href=javascript:void(0) onclick='plusOne(".$id.");'> ++</a></span>| ");
			  echo("added on ".$date." by ".$user." - ");
			  if ($revision==0){
			  echo("<span class='rev' id=rev-".$id."> <a href=javascript:void(0) onclick='giveToRevision(".$id.");'> Report</a>"); 
			  } else { echo("This quote has already been marked for review"); }
			  ?></div><!--end content-div-header -->
              <?php 
			  $quote=nl2br($quote);
			  echo($quote) ?>
          </div><!-- end content div -->
	<?php if ((i==1)||(i==4)) { ?>
			<div class="ad-horizontal">
				WERBUNG
			</div>
	<?php		} 
		} 
}
else
{echo("<div id='dbcon'>No DB COnnection possible at all, error is ".mysqli_connect_errno()." : ".mysqli_connect_error()."</div><!--end dbcon -->"); }
$db->close();
?>