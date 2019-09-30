<FORM method="GET" action="EcuacionForm.php">
	a: <INPUT type="text" name="a" /><br />
	b: <INPUT type="text" name="be" /><br />
		b: <INPUT type="text" name="ce" /><br />
	<INPUT type="submit" name="submit"/>

</FORM>

<?php
if (isset($_GET['submit'])) {
	equacioSegonGrau($_GET['a'],$_GET['be'],$_GET['ce']);
}
function equacioSegonGrau(int $a, int $b, int $c){ 
	$neg = -1;
	$menosb = $b * $neg; 
	$oper1 = pow($b,2); 
	$oper2 = 4*$a*$c; 
	$resta = $oper1-$oper2; 
	$suma = $oper1 + $oper2;
	$raiz = pow($resta,(1/2));
	echo "la resta es ".$resta;
	echo "<br>";
	echo "la suma es ".$suma;
}
?>