<?php 

$file = "example.txt";

if ($handle = fopen($file, "r")) {
   //echo $contentByBites = fread($handle, 15) . "<br>"; // Each bite equals a character
   echo $fullContent = fread($handle, filesize($file)); // Reads the entire file
}
else echo "The file could not be written.";

fclose($handle);

?>