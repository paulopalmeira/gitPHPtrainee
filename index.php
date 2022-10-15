<!DOCTYPE html>
<html>
<body>

<?php
$beta = 0;
$xis = 5;
$ypslon = 10;

function myTest() {
  global $beta, $xis, $ypslon;
  $beta = $xis * $ypslon;
}

myTest();
echo $beta; // outputs 50
?>

<?php
function rodaAroda() {
  static $x = 0;
  echo $x;
  $x++;
}

rodaAroda();
rodaAroda();
rodaAroda();
rodaAroda();
rodaAroda();
rodaAroda();

echo strlen ("o_Comando_STRLEN_conta_quantos_caracteres_inclusive_espaco");

echo strrev ("o_Comando_STRREV_inverte_A_Frase");

$oldtxt = "Precisamos trocar uma palavra do texto";
$newtxt = str_replace ( "Precisamos", "PICISAMO", $oldtxt );

echo $newtxt;




?>

<?php
echo "<h2>PHP escrito um pouco maior</h2>";
echo "Pula uma linha com o BR <br>";
echo "aprendendo PHP<br>";
echo "Essa ", "string ", "foi ", "feita ", "com multiplos parâmetros.<br>";
echo $newtxt;
echo $beta;
?>

<?php
$text1 = "Aprendendo PHP";
$text2 = "com a mão na massa";
$x = 5;
$y = 4;

echo "<h2>" . $text1 . "</h2>";
echo "Estudando PHP " . $text2 . "<br>";
echo $x + $y;
?>

<?php
print "<h2>Agora com o comando PRINT</h2>";
print "Pula uma linha com o BR <br>";
print "aprendendo PHP<br>";
echo "Essa ", "string ", "também foi ", "feita ", "com multiplos parâmetros.<br>";
print $newtxt;
print $beta;
?>

<?php
$x = 5985;
$y = "tExtinho";
var_dump($x);
var_dump($y);
?>

<?php
$x = 10.365;
var_dump($x);
?>

<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>

</body>
</html>