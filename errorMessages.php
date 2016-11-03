<?php

ini_set('display_errors', 'On');

try {
    $db = new PDO('mysql:host=localhost;dbname=pdo','root','root');
}catch(PDOException $e) {
    die('Error connecting to the DB.');
}

// sets a silent error which wouldn't display an error message and "fail silently."
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

// displays the error message boldly
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

// displays a fatal error message
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->query("INVALID");

