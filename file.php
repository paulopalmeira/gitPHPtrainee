<?php
$myfile = fopen("testfile.txt", "w")
?>

<?php
// Esse código cria os dois nomes no arquivo texto
// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "João Bombom\n";
// fwrite($myfile, $txt);
// $txt = "Joana Bombom\n";
// fwrite($myfile, $txt);
// fclose($myfile);
?>

<?php
// Perceba que, se tiver algum conteudo no txt, ele apaga e insere novos
// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "Mickey Mouse\n";
// fwrite($myfile, $txt);
// $txt = "Minnie Mouse\n";
// fwrite($myfile, $txt);
// fclose($myfile);
?>

<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

<?php
echo readfile("newfile.txt");
?>
