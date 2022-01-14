<h2>Orduya destek fondu</h2>

<?php

//ad/soyad -> (vezife/maash) -> bank/mebleg -> teshekkur

if(!isset($_POST['d1']) && !isset($_POST['d2']) && !isset($_POST['d3']))
{
	echo'
	<form method="post">
		Adiniz:<br>
		<input type="text" name="ad"><br>
		Soyadiniz:<br>
		<input type="text" name="soyad"><br><br>
		<input type="submit" name="d1" value="Ireli">
	</form>';
}

if(isset($_POST['d1']))
{
	echo'
	<form method="post">
		Vezife:<br>
		<input type="text" name="vezife"><br>
		Maash:<br>
		<input type="text" name="maash"><br><br>
		<input type="submit" name="d2" value="Ireli">
	</form>';
}

if(isset($_POST['d2']))
{
	echo'
	<form method="post">
		Bank hesabi:<br>
		<input type="text" name="bank"><br>
		Mebleg:<br>
		<input type="text" name="mebleg"><br><br>
		<input type="submit" name="d3" value="Ireli">
	</form>';
}

if(isset($_POST['d3']))
{echo'Teshekkur edirik! Sizin <b>'.$_POST['mebleg'].'</b> AZN desteyiniz qebul olundu';}

?>