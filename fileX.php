<?php
echo dirname("C:\wamp64\www\gitPHPtrainee\fileX.php") . "<br/>";
echo dirname("C:\wamp64\www\gitPHPtrainee\fileX.php",2) . "<br/>";
echo dirname("\gitPHPtrainee\fileX.php") . "<br/>";
?>

<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

<br>

<?php
$ip = "32.23.23.32";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}
?>