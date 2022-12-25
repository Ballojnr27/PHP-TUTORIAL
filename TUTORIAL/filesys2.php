<?php

$file = 'quotes.txt';

// opening a file for reading; r+ is used to add to the beginning of a file while a+ at the end 
//$handle = fopen($file, 'r+');
$handle = fopen($file, 'a+');

// reading the file
//echo fread($handle, filesize($file));
//echo fread($handle, 100);

// reading a single line
echo fgets($handle);
echo fgets($handle);

// reading a single character
echo fgetc($handle);

// writing more to the text
//fwrite($handle, "\nI am a native of Eruwa land.");

// to close a file
fclose($handle);

// to delete a file
unlink($file);
?>