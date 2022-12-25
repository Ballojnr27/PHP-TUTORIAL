<?php
// Super Globals

// $_GET['name'], $_POST['name'] are the common ones 

/*echo $_SERVER['SERVER_NAME'] . '</br>';
echo $_SERVER['REQUEST_METHOD'] . '</br>';
echo $_SERVER['SCRIPT_FILENAME'] . '</br>';
echo $_SERVER['PHP_SELF'] . '</br>';*/

session_start();

$sess = $_SESSION['name'] ?? 'Guest';



 // to delete the session

 if ($_SERVER['QUERY_STRING'] == 'noname'){
    unset($_SESSION['name']);
}

// get the cookie
$gender = $_COOKIE['gender'] ?? 'Unknown';

echo 'Hello ' . $sess ; echo ' (' . $gender . ')' ;
?>