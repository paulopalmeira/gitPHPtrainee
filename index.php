<!DOCTYPE html>
<html>
<body>



<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
?>

<?php
$x = 0;

while($x <= 50) {
  echo "The number is: $x <br>";
  $x+=10;
}
?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
?>

<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>

<?php
for ($x = 0; $x <= 10; $x++) {
  echo "O número é: $x <br>";
}
?>

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

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

<?php
echo str_word_count("CONTADOR DE PALAVRAS"); // outputs 3
?>
<BR>
<?php
echo strpos("vAI BUSCAR A POSIÇÃO DA PALAVRA", "POSIÇÃO"); // outputs 13
// Lembrando que a primeira posição é 0 e não 1, senão OUTPUT seria 14
?>
<br>

<?php
echo setlocale(LC_ALL,"US");
echo "<br>";
echo setlocale(LC_ALL,NULL);
?>

<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>    

<?php
$x = 10.365;
var_dump(is_float($x));
?>

<?php
$x = 1.9e411;
var_dump($x);
?>

<?php
$x = acos(8);
var_dump($x);
?>

<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
<br>
<?php
echo(pi()); // returns 3.1415926535898
?>
<br>
<?php
echo(sqrt(144));  // returns 12
?>
<br>


<?php
// vamos ver o case sensitive
define("GREETING", "<br> Essa é a mensagem");
echo GREETING;
?>

<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
echo cars[2];
?>

<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>

<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

</body>
</html>