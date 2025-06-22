<?php

$pdo = include_once __DIR__ . '/connection.php';

//все записи через цикл
$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
    print_r($user);
}

//Все записи через fetchAll
$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($users);

//Прямой запрос
$userId = '1;truncate table users;';
$sql = "SELECT * FROM users WHERE id = $userId";
try {
    $stmt = $pdo->query($sql);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($user);
} catch (PDOException $e) {
    echo $e->getMessage();
}

//Подготовленный запрос по ID
$userId = 1;
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($user);

//Подготовленный запрос по email
$email = 'bekaaliyev848007@gmail.com';
$sql = "SELECT * FROM users WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'email' => $email
]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($user);
