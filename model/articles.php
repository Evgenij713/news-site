<?php
declare(strict_types=1);

function getALLArticles(): array {
    $sql = 'SELECT * FROM articles GROUP BY date_add DESC, id_article DESC';
    $query = dbQuery($sql);
    return $query->fetchAll();
}

function getArticlesCategory(int $id): array {
    $sql = "SELECT a.id_article, a.title, a.content, a.date_add, a.category as id_category, c.name as category
            FROM articles as a, categories as c 
            WHERE a.category = c.id_category AND c.id_category = $id
            GROUP BY a.date_add DESC, a.id_article DESC";
    $query = dbQuery($sql);
    return $query->fetchAll();
}

function getArticle(int $id): array {
    $sql = "SELECT a.id_article, a.title, a.content, a.date_add, a.category as id_category, c.name as category, user as id_user
            FROM articles as a, categories as c 
            WHERE a.category = c.id_category AND id_article = $id LIMIT 1";
    $query = dbQuery($sql);
    $article = $query->fetch();
    return is_array($article) ? $article : [];
}

function addArticle(array $fields): bool {
    $sql = 'INSERT INTO articles (title, content, date_add, category, user) VALUES (:title, :content, :date_add, :category, :id_user)';
    dbQuery($sql, $fields);
    return true;
}

function removeArticle(int $id) : bool {
    $sql = "DELETE FROM articles WHERE id_article = $id";
    dbQuery($sql);
    return true;
}

function editArticle(int $id, array $fields): bool{
    $sql = "UPDATE articles SET title = :title, content = :content, date_add = :date_add, category = :category WHERE id_article = $id";
    dbQuery($sql, $fields);
    return true;
}

function validateArticleInput(array $fields): array {
    $errors = [];
    
    if ($fields['date_add'] === '' || $fields['title'] === '' || $fields['content'] === '' || $fields['category'] === '') {
        array_push($errors, 'Все поля должны быть заполнены.');
    }
    else {
        if (!validateDate($fields['date_add'])) {
            array_push($errors, 'Некорректный формат даты.');
        }
        if (strlen($fields['title']) < 3 || strlen($fields['title']) > 256) {
            array_push($errors, 'Заголовок должен быть от 3 до 256 символов.');
        }
        if (strlen($fields['content']) < 10 || strlen($fields['content']) > 5000) {
            array_push($errors, 'Текст должен быть от 10 до 5000 символов.');
        }
        if (!idCheck($fields['category'])) {
            array_push($errors, 'Не выбрана категория.');
        }
        if (isset($fields['id_user']) && !idCheck($fields['id_user'])) {
            array_push($errors, 'Не выбран пользователь (автор статьи).');
        }
    }
    
    return $errors;
}