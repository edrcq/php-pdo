<?php 

require_once "db.php";

function account_add($email, $password) {
    global $db;

    $query = $db->prepare('INSERT INTO accounts (email, password) VALUES (:email, :password)');
    $query->bindValue(':email', $email);
    $query->bindValue(':password', $password);
    $query->execute();

    return $db->lastInsertId();
}

function account_getByEmail($email) {
    global $db;

    $query = $db->prepare('SELECT * FROM accounts WHERE email = ?');
    $query->execute([$email]);

    $data = $query->fetchAll(PDO::FETCH_OBJ);
    // $data->email; // FETCH_OBJ
    // $data['email']; // FETCH_ASSOC
    return $data;
}
