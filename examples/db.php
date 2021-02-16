<?php 

try {
    $db = new PDO('mysql:host=127.0.0.1;port=3307;dbname=test_exo', 'root', '');
}
catch (Exception $ex) {
    die('Erreur MySQL, maintenance en cours. Exception: ' . $ex->getMessage());
}
