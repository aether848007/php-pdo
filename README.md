# 🗄️ PHP + PDO Simple CRUD

Простой пример CRUD (Create, Read, Update, Delete) приложения с использованием **PHP** и **PDO** для работы с базой данных MySQL.

---

## 📁 Структура проекта

php-pdo/
├── .idea/ # Настройки IDE (например, PhpStorm)
├── .osp/ # Файлы OSPanel (необязательно)
├── connection.php # Установление соединения через PDO
├── insert.php # Добавление новой записи
├── select.php # Отображение записей
├── update.php # Обновление существующей записи
└── delete.php # Удаление записи

---

## ⚙️ Требования

- PHP 7.0+ с PDO расширением
- MySQL Server
- Локальный сервер (OSPanel, XAMPP, MAMP и др.)
- PhpMyAdmin или другой инструмент для работы с БД

---

## 🚀 Быстрый старт

1. **Клонируй репозиторий:**
    ```bash
    git clone https://github.com/aether848007/php-pdo.git
    cd php-pdo
    ```

2. **Создай базу данных и таблицу:**
    ```sql
    CREATE DATABASE `php_pdo_crud`;
    USE `php_pdo_crud`;

    CREATE TABLE `items` (
      `id` INT AUTO_INCREMENT PRIMARY KEY,
      `name` VARCHAR(255) NOT NULL,
      `description` TEXT,
      `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
    );
    ```

3. **Настрой подключение к БД:**
    Открой `connection.php` и измени параметры:

    ```php
    <?php
    $dsn = 'mysql:host=localhost;dbname=php_pdo_crud;charset=utf8';
    $user = 'your_username';
    $pass = 'your_password';

    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    } catch (PDOException $e) {
        exit('Connection failed: ' . $e->getMessage());
    }
    ```

4. **Запусти проект:**
    Перемести папку в корень вашего локального сервера и открой в браузере:

    ```
    http://php-pdo/insert.php
    http://php-pdo/select.php
    ```

---

## 🧩 Функциональность

- ➕ **insert.php** — форма и логика для добавления новой записи
- 📄 **select.php** — вывод списка всех записей
- ✏️ **update.php** — форма и логика для редактирования записи
- ❌ **delete.php** — удаление записи по нажатию кнопки

---

## 🔒 Безопасность

- Используется PDO с `prepared statements`, что защищает от SQL-инъекций
- Ошибки обрабатываются с `PDO::ERRMODE_EXCEPTION`

---

## 🛠 Возможные улучшения

- Добавить валидацию форм (JS + PHP)
- Реализовать фильтрацию / поиск записей
- Использовать шаблонизатор (например, Twig) для отделения логики от представления
- Реализовать пагинацию
- Перейти на архитектуру MVC или использовать OOP-подход
- Добавить стилизацию (Bootstrap, Tailwind CSS)

---

## 📄 Лицензия

Данный проект открыт для обучения и может быть использован по лицензии MIT.  
Свободен для модификации и использования в ваших целях.
