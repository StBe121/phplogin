<?php	
$i =$_POST["zahl"];
$stri = (string)$i;
$j = $stri[0];
$k = $stri[1];
$l = $stri[2];

echo  "Die Zahl $i besteht aus folgenden Ziffern:";
echo "Hunderter: $j";
echo "Zehner: $k";
echo "Einer: $l";    
?>
<html>

<form action="aufgabe1.php" method="post">
Zahl: <input type="text" name="zahl" /><br />

<input type="Submit" value="Absenden" />
</form>



