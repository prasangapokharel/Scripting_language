<?php
$myfile = fopen("read.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("read.txt"));
fclose($myfile);
?>
<?php
$filename = "read.txt";
$myfile = fopen($filename, "r") or die("Unable to open file!");

$contents = '';
while (!feof($myfile)) {
    $char = fgetc($myfile);
    if ($char === '.') {
        $contents .= $char;
        break; 
    }
    $contents .= $char;
}

echo $contents;

fclose($myfile);
?>
