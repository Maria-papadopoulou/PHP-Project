<!DOCTYPE HTML>
<HTML>
<HEAD>
<META charset="utf-8">
<TITLE> FIRST FORM!!!
</TITLE>
</HEAD>
<BODY>
<?php

$onoma=$_POST['onoma'];
$epwnymo=$_POST['epwnymo'];
$hmerom=$_POST['hmerom'];
echo "Ονομάζεσαι ".$onoma." ".$epwnymo." και είσαι ".$hmerom." ετών.<br />";

if($hmerom<=2000)
	echo "eisai enilikos";
else
	echo "eisai anilikos";



?>