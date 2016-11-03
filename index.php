<?php

ini_set('display_errors', 'On');

try {
    $db = new PDO('mysql.host=127.0.0.1;dbname=pdo','root','root');
} catch(PDOException $e) {
    die('Site is down.');
}


