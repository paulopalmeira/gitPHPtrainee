<html>
<body>

<?php
echo "Hoje é " . date("d/m/Y");
echo "Hoje é " . date("Y.m.d");
echo "Hoje é " . date("Y-m-d");
echo "Hoje é " . date("l");
?>

<?php
echo "A hora é " . date("h:i:sa");
?>

<?php
$d=mktime(11, 14, 54, 2, 4, 2014);
echo "Created date is " . date("d/m/Y h:i:s", $d);
?>

</body>
</html>