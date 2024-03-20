<?php
$file = fopen("search.txt", "r");
while(!feof($file)) {
    $line = fgets($file);
    if(trim($line) == "STOP") {
        break;
    }
    echo $line . "<br>";
}
fclose($file);
?>
