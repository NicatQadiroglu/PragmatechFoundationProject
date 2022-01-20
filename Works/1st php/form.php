<?php

if(isset($_POST['d']))
{
	if(!empty($_POST['x']) && !empty($_POST['y']))
	{
		echo'Daxil etdiyiniz ad: '.$_POST['x'].'<br>';
		echo'Daxil etdiyiniz soyad: '.$_POST['y'].'<br>';
	}
	else
	{echo'Lutfen melumatlari tam doldurun<br>';}
}

?>


<br>
<form method="post">
	Adiniz:<br>
	<input type="text" name="x"><br>
	Soyadiniz:<br>
	<input type="text" name="y"><br><br>
	<input type="submit" name="d" value="Gonder">
</form>