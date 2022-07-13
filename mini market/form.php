<!DOCTYPE HTML>
<HTML>
<HEAD>
<META charset="utf-8">
<TITLE> FIRST FORM!!!
</TITLE>
</HEAD>
<BODY>
<?php

$proion=$_POST['proion'];
$posotita=$_POST['posotita'];
$timi=$_POST['timi'];
$fpa=$_POST['fpa'];

echo "Αγόρασες <strong>".$posotita."</strong> τεμάχια του προιόντος <strong>".$proion."</strong> και κοστίζει χωρίς ΦΠΑ <strong>".$posotita*$timi."&euro;</strong> και με ΦΠΑ <strong>".$posotita*$timi*$fpa."&euro;</strong>";
?>