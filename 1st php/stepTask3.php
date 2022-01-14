<h2>Orduya destek fondu</h2>

<?php

//ad/soyad -> (vezife/maash) -> bank/mebleg -> teshekkur

//Bank ve meblegi daxil etdikden sonra derhal TESHEKKUR mesaji gelmesin
//- Eger daxil edilmish mebleg 10 AZN-den kicikdirse: Minimum destek 10 AZN olmalidir
//- Eger daxil edilmish mebleg 500 AZN-den boyukdurse: Maksimum destek 500 AZN olmalidir
//- Eger daxil edilmish mebleg 10-500 AZN araligindadirsa TESHEKKUR MESAJI gelir

//Eger Melumatlar tam deyilse proqram ireli getmir, yerindece direnib durur






if(!isset($_POST['d1']) && !isset($_POST['d2']) && !isset($_POST['d3']) or
	isset($_POST['d1']) && empty($_POST['ad']) or
	isset($_POST['d1']) && empty($_POST['soyad']))
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

if(isset($_POST['d1']) && !empty($_POST['ad']) && !empty($_POST['soyad']) or
   isset($_POST['d2']) && empty($_POST['vezife']) or
   isset($_POST['d2']) && empty($_POST['maash']))
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

if(isset($_POST['d2']) && !empty($_POST['vezife']) && !empty($_POST['maash']) or
   isset($_POST['d3']) && empty($_POST['bank']) or
   isset($_POST['d3']) && empty($_POST['mebleg']))
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

if(isset($_POST['d3']) && !empty($_POST['bank']) && !empty($_POST['mebleg']))
	if($_POST['mebleg'] < '10')
		{echo 'Minimum destek 10 AZN olmalidir';}
	elseif($_POST['mebleg'] > '500')
		{echo 'Maksimum destek 500 AZN olmalidir';}

	else

 	{echo'Teshekkur edirik! Sizin <b>'.$_POST['mebleg'].'</b> AZN desteyiniz qebul olundu';}






























/*if(!isset($_POST['d1']) && !isset($_POST['d2']) && !isset($_POST['d3']))
	
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
elseif(isset($_POST['d1']) && empty($_POST['ad']) && empty($_POST['soyad']))
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
	elseif(isset($_POST['d1']) && !empty($_POST['ad']) && empty($_POST['soyad']))
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
		elseif(isset($_POST['d1']) && empty($_POST['ad']) && !empty($_POST['soyad']))
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

elseif(isset($_POST['d1']) && !empty($_POST['ad']) && !empty($_POST['soyad']))


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
	elseif(isset($_POST['d2']) && empty($_POST['vezife']) && empty($_POST['maash']))
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
elseif(isset($_POST['d2']) && !empty($_POST['vezife']) && empty($_POST['maash']))
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
elseif(isset($_POST['d2']) && empty($_POST['vezife']) && !empty($_POST['maash']))
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
	elseif(isset($_POST['d2']) && !empty($_POST['vezife']) && !empty($_POST['maash']))
	
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

elseif(isset($_POST['d3']) && empty($_POST['bank']) && empty($_POST['mebleg']))
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
	elseif(isset($_POST['d3']) && !empty($_POST['bank']) && empty($_POST['mebleg']))
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
		elseif(isset($_POST['d3']) && empty($_POST['bank']) && !empty($_POST['mebleg']))
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
	elseif(isset($_POST['d3']) && !empty($_POST['bank']) && !empty($_POST['mebleg']))
	if($_POST['mebleg'] < '10')
		{echo 'Minimum destek 10 AZN olmalidir';}
	elseif($_POST['mebleg'] > '500')
		{echo 'Maksimum destek 500 AZN olmalidir';}

	else

 	{echo'Teshekkur edirik! Sizin <b>'.$_POST['mebleg'].'</b> AZN desteyiniz qebul olundu';}
*/
?>