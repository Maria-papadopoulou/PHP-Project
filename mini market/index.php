<!DOCTYPE HTML>
<HTML>
<HEAD>
<META charset="utf-8">
<TITLE> FIRST PHP PAGE!!!
</TITLE>
</HEAD>
<BODY>
HTML
<br />
<?php
$onoma="Γιάννης";
$epwnymo="Ιωάννου";
$ilikia=25;
//1st way!!!
echo "<p>Ονομάζομαι $onoma $epwnymo και είμαι $ilikia ετών</p>";
//2nd way!!!
echo "<p>Ονομάζομαι ".$onoma." ".$epwnymo." και είμαι ".($ilikia*1.2)." ετών</p>";
?>
<!-- 3rd way!!!-->
<p>Ονομάζομαι <?php echo $onoma; ?> <?php echo $epwnymo; ?> και είμαι <?php echo $ilikia*1.2; ?> ετών.</p>
</BODY>
</HTML>