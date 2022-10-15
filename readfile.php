<?php
echo readfile("webdictionary.txt");
?>

<br>
<br>
<br>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>

<br>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile) .'<br>';
echo fgets($myfile). '<br>';
echo fgets($myfile). '<br>';
fclose($myfile);
?>

<br>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<br>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile) . ".";
}
fclose($myfile);
?>

<?php
echo disk_total_space("C:");
?>

<br>

<?php
echo disk_free_space("C:");
?>

<br>

<?php
echo file_exists("webdictionary.txt");
?>


<?php
$t = file_exists("webdictionary.txt");

if ($t =='1') {
  echo "O arquivo existe!";
} else {
  echo "O arquivo não existe!";
}
?>
<br>
<?php
echo filesize("webdictionary.txt");
?>


<br>
<?php
$types = array( 'txt', 'jpg', 'md', 'php' );
$path = dirname(__FILE__);
$dir = new DirectoryIterator($path);
foreach ($dir as $fileInfo) {
    $ext = strtolower( $fileInfo->getExtension() );
    if( in_array( $ext, $types ) ) echo $fileInfo->getFilename() .'<br>';
}
?>

<?php
$types = array( 'txt', 'jpg', 'md', 'php' );
$path = dirname(__FILE__);
$dir = new DirectoryIterator($path);
foreach ($dir as $fileInfo) {
    $ext = strtolower( $fileInfo->getExtension() );
} 
?>

<br>


<?php
// diretório onde estão os arquivos
$diretorio = dirname(__FILE__);

// *.txt são os formatos de arquivos a serem alterados
foreach (glob("$diretorio/*.*") as $arquivo) {
$p1 = explode("/", $arquivo);
$p2 = explode(".", $p1[1]);
//print "<a href=\"$arquivo\" target=\"_blank\">$p2[0]</a><br>";
//print "<a href=\"#\" onclick=\"window.open('$arquivo','_blank','')\">$p2[0]</a><br>";
print "<a href='$diretorio','$arquivo')\">$p2[0]</a><br>";
}
?>
