<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE> FORMA </TITLE>
</HEAD>
<BODY>
<?php


$onoma=$_POST['onoma'];
$epitheto=$_POST['epitheto'];
$ilikia=$_POST['ilikia'];

echo "<p> Ονομάζομαι ".$onoma." ".$epitheto." και είμαι ".$ilikia." ετών. </br> </p>";

if($ilikia>=18)
	echo "Eίσαι ενήλικος";
else
	echo"Είσαι ανήλικος";

?>
