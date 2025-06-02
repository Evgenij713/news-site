<?php
declare(strict_types=1);

function getCategories(): array {
    $sql = 'SELECT * FROM categories GROUP BY id_category';
    $query = dbQuery($sql);
    return $query->fetchAll();
}

function getCategory(int $id): array {
    $sql = "SELECT * FROM categories WHERE id_category = $id LIMIT 1";
    $query = dbQuery($sql);
    $category = $query->fetch();
    return is_array($category) ? $category : [];
}

function addCategory(array $fields): bool {
    $sql = 'INSERT INTO categories (`name`) VALUES (:name)';
    dbQuery($sql, $fields);
    return true;
}

function editCategory(int $id, array $fields): bool {
    $sql = "UPDATE categories SET `name` = :name WHERE id_category = $id";
    dbQuery($sql, $fields);
    return true;
}

function canDeleteCategory(int $id) : bool {
    $sql = "SELECT COUNT(*) as count FROM articles WHERE category = $id";
    $query = dbQuery($sql);
    $news = $query->fetch();
    return $news['count'] === 0 ? true : false;
}

function removeCategory(int $id) : bool {
    $sql = "DELETE FROM categories WHERE id_category = $id";
    dbQuery($sql);
    return true;
}

function validateCategoryName(array $fields): array {
    $errors = [];

    if ($fields['name'] === '') {
        array_push($errors, 'Название категории не может быть пустым.');
    }
    else {
        if (strlen($fields['name']) < 3 || strlen($fields['name']) > 128) {
            array_push($errors, 'Название категории должно быть от 3 до 128 символов.');
        }
        else {
            $categories = getCategories();
            foreach ($categories as $category) {
                if ($category['name'] === $fields['name']) {
                    array_push($errors, 'Категория с таким названием уже существует.');
                    break;
                }
            }
        }
    }
    
    return $errors;
}