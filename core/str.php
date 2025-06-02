<?php
declare(strict_types=1);

function cropText(string $str): string {
    if (strlen($str) > 99) {
        return mb_substr($str, 0, 99) . '...';
    }
    else {
        return $str;
    }
}

function validateDate(string $dateString): bool {
    $format = 'Y-m-d H:i:s';
    if (strtotime($dateString) === false) {
        return false;
    } 
    else {
        $dateTime = date($format, strtotime($dateString));
        if ($dateString === $dateTime) {
            return true;
        } 
        else {
            return false;
        }
    }
}

function idCheck(string $strId): bool {
    $pattern = '/^[1-9]\d*$/';
    return !!preg_match($pattern, $strId);
}

function fileNameCheck(string $name): bool {
    $pattern = '/[a-zA-Z][a-zA-Z0-9]*/';
    return !!preg_match($pattern, $name);
}