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

</body>
</html>