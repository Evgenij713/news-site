<?php
declare(strict_types=1);

function connectDB(): PDO {
    static $db;

    $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
    $user = DB_USER;
    $password = DB_PASS;

    if ($db === NULL) {
        try {
            $db = new PDO($dsn, $user, $password, [
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			]);
            $db->exec('set names '.DB_CHARSET);
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    return $db;
}

function dbQuery(string $sql, array $parameters = NULL): PDOStatement {
    $connect = connectDB();
    $query = $connect->prepare($sql);
    $query->execute($parameters);
    dbCheckError($query);
    return $query;
}

function dbCheckError(PDOStatement $query): bool {
    $errInfo = $query->errorInfo();

    if($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }

    return true;
}

function getLastInsertId(): string {
    $connect = connectDB();
    return $connect->lastInsertId();
}