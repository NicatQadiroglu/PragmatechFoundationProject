<?php

/*
- Login: nicat Parol: 12345: Xosh geldiniz
- Eger login yalishdirsa, parol duzdurse: Daxil etdiyiniz login yanlishdir
- Eger login duzdurse, parol yanlishdirsa: Daxil etdiyiniz parol yanlishdir
- Eger login ve parol yalishdirsa: Daxil etdiyiniz login ve parol yanlishdir
- Eger login boshdursa, parol doludursa: Login daxil etmediniz
- Eger parol boshdursa, login doludursa: Parol daxil etmediniz
- Eger login ve parol boshdursa: Login ve parol daxil etmediniz

*/

if (isset($_POST['d'])) 
{
					
	if ($_POST['login'] == 'nicat' &&  $_POST['pass'] == '12345')
	{echo 'Xosh geldiniz';}
	elseif ($_POST['login'] != 'nicat' && !empty($_POST['login']) && $_POST['pass'] == '12345')
	{echo 'Daxil etdiyiniz login yanlishdir';} 
	elseif ($_POST['login'] == 'nicat' && !empty($_POST['pass']) &&  $_POST['pass'] != '12345')
	{echo 'Daxil etdiyiniz parol yanlishdir';}
	elseif ($_POST['login'] != 'nicat' && $_POST['pass'] != '12345')
	{echo 'Daxil etdiyiniz login ve parol yanlishdir';}
	elseif (empty($_POST['login']) && !empty($_POST['pass'])) 
	{echo 'Login daxil etmediniz' ; }
	elseif (!empty($_POST['login']) && empty($_POST['pass'])) 
	{echo 'Parol daxil etmediniz' ;}
	elseif (empty($_POST['login']) && empty($_POST['pass'])) 
	{echo 'Login ve parol daxil etmediniz' ;} 

}

?>









<form method="post">
	Login:<br>
	<input type="text" name="login"> <br>
	Parol:<br>
	<input type="password" name="pass"><br><br>
	<input type="submit" name="d" value="Daxil ol">
</form>