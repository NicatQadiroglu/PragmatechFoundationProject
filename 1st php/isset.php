<?php

/*

isset() - basilibsa/movcuddursa
!isset() - basilmayibsa/movcud deyilse

empty() - boshdursa
!empty() - bosh deyilse


*/


if(isset($_POST['d1'])){echo'1';}
if(isset($_POST['d2'])){echo'2';}
if(isset($_POST['d3'])){echo'3';}
if(isset($_POST['d4'])){echo'4';}
if(isset($_POST['d5'])){echo'Gormursen basmaq olmaz!';}

?>

<br><br>
<form method="post">
	<input type="submit" name="d1" value="1">
	<input type="submit" name="d2" value="2">
	<input type="submit" name="d3" value="3">
	<input type="submit" name="d4" value="4">
	<input type="submit" name="d5" value="Basmaq olmaz!!!">
</form>