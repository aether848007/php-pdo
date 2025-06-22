<?php

$pdo = include_once __DIR__ . '/connection.php';

$name = 'Алиев ';
$email = 'bek@mail.ru';
$password = '321';

$sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([
        'email' => $email,
        'name' => $name,
        'password' => $password
    ]);
} catch (PDOException $exception) {
    echo "{$exception->getMessage()}";
}
