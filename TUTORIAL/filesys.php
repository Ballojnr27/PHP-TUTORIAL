<?php

// File System; to read a file in a system

//$quote = readfile('read.txt');
//echo $quote;

// to check if a file exists
$file = 'readme.txt';

if(file_exists($file))
{
 /*   // read file
 echo readfile($file) . '</br>';

 // to copy file
 copy($file, 'quotes.txt') . '</br>';

 // to find the path the file is
 echo realpath($file) . '</br>';

 // to find the file size
 echo filesize($file) . '</br>';

 // to rename the file
 rename($file, 'readme.txt');*/
}
else
{
    echo 'File does not exist';
}

// to make a file a directory
mkdir('file system');
?>