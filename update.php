<?php

$pdo = include_once __DIR__ . '/connection.php';

//Апдейт
$userId = 4;
$newPassword = '1234';
$sql = "UPDATE users SET password = :password WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'password' => $newPassword,
    'id' => $userId
]);
