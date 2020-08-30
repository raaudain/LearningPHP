<?php 

$file = "example.txt";

if ($handle = fopen($file, "w")) {
    fwrite($handle, "I'm hungry, but I'm too lazy to cook.");
}
else echo "The file could not be written.";

fclose($handle);

?>