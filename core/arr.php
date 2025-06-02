<?php
declare(strict_types=1);

function extractFields(array $target, array $fields): array {
    $result = [];

    foreach ($fields as $field) {
        if (isset($target[$field])) {
            $result[$field] = trim($target[$field]);
        }
        else {
            $result[$field] = '';
        }
    }

    return $result;
}