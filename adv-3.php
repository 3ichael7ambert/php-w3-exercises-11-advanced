<?php 
//Open a file, and write the correct syntax to output one character at the time, until end-of-file.

$myfile = fopen("webdict.txt", "r");

while(!feof($myfile)) {
  echo fgetc($myfile);
}

?>
