<?php
declare(strict_types=1);

function usersById(int $id) : ?array{
    $sql = "SELECT id_user, `login`, `role`, email, `name` FROM users WHERE id_user=:id";
    $query = dbQuery($sql, ['id' => $id]);
    $user = $query->fetch();
    return $user === false ? null : $user;
}

function usersOne(string $login) : ?array {
    $sql = "SELECT id_user, `password` FROM users WHERE `login`=:login";
    $query = dbQuery($sql, ['login' => $login]);
    $user = $query->fetch();
    return $user === false ? null : $user;
}

function createUser(array $fields) : bool {
    $sql = 'INSERT INTO users (`login`, `password`, email, `name`) VALUES (:login, :password, :email, :name)';
    dbQuery($sql, $fields);
    return true;
}

function isValidLoginFormat(string $login): bool
{
    // Разрешены: буквы (a-z, A-Z), цифры (0-9), подчёркивание (_), дефис (-), точка (.)
    return preg_match('/^[a-zA-Z0-9_\-\.]+$/', $login) === 1;
}

function validateUserInput(array $fields) : array {
    $errors = [];
    
    if ((isset($fields['name']) && $fields['name'] === '') || (isset($fields['email']) && $fields['email'] === '') || 
        (isset($fields['login']) && $fields['login'] === '') || 
        (isset($fields['password']) && $fields['password'] === '') || 
        (isset($fields['repeat-password']) && $fields['repeat-password'] === '')) {
        array_push($errors, 'Все поля должны быть заполнены.');
    }
    else {
        if (isset($fields['name']) && (strlen($fields['name']) < 3 || strlen($fields['name']) > 128)) {
            array_push($errors, 'Имя должно быть от 3 до 128 символов.');
        }
        if (isset($fields['email']) && !filter_var($fields['email'], FILTER_VALIDATE_EMAIL)) {
            array_push($errors, 'Неверный формат email.');
        }
        if (isset($fields['email']) && strlen($fields['email']) > 256) {
            array_push($errors, 'Длина email не должна превышать 256 символов.');
        }
        if (isset($fields['login']) && (strlen($fields['login']) < 6 || strlen($fields['login']) > 50)) {
            array_push($errors, 'Логин должен быть от 6 до 50 символов.');
        }
        if (!isValidLoginFormat($fields['login'])) {
            array_push($errors, 'Логин может содержать только следующие символы: буквы (a-z, A-Z), цифры (0-9), подчёркивание (_), дефис (-), точка (.).');
        }
        if (isset($fields['password']) && (strlen($fields['password']) < 6 || strlen($fields['password']) > 60)) {
            array_push($errors, 'Пароль должен быть от 6 до 60 символов.');
        }
        if (isset($fields['password']) && isset($fields['repeat-password']) && 
            $fields['password'] !== $fields['repeat-password']) {
            array_push($errors, 'Введеные пароли не совпадают.');
        }
    }
    
    return $errors;
}