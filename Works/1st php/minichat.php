<h2>MiniChat</h2>

<?php

//n - cari ay 0-siz
//j- cari gun 0-siz

$tarix = date('Y-m-d H:i:s');


if(isset($_POST['d']))
{$mesajlar = '<b>'.$_POST['ad'].' '.$_POST['soyad'].'</b><br>'.$_POST['mesaj'].'<br>'.$tarix.'<br><br>'.$_POST['evvelkiler'].'';}

?>


<form method="post">
	Adiniz:<br>
	<input type="text" name="ad"><br>
	Soyadiniz:<br>
	<input type="text" name="soyad"><br>
	Mesaj:<br>
	<textarea cols="22" rows="5" name="mesaj"></textarea><br><br>
	<input type="hidden" name="evvelkiler" value="<?=$mesajlar?>">
	<input type="submit" name="d" name="Gonder">
</form>

<?=$mesajlar; ?>