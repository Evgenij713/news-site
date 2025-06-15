<?php
declare(strict_types=1);

function saveLog(): bool {
    $res = false;
    
    $folder = 'logs';
    if (!file_exists($folder)) {
        mkdir($folder);
    }
    $today = date('Y-m-d');
    $fileLogs = fopen($folder.'/'.$today.'.logs', 'a');
    $log = date('Y-m-d H-i-s') . "\t" . $_SERVER['REMOTE_ADDR'] . "\t" . ($_SERVER['HTTP_REFERER'] ?? '-') . "\t" . $_SERVER['REQUEST_URI'] . "\n";
    if (fwrite($fileLogs, $log)) {
        $res = true;
    }
    fclose($fileLogs);
    
    return $res;
}

function logStrToArr(string $str): array {
    $str = rtrim($str);
    $parts = explode("\t", $str);
    return ['dt' => $parts[0], 'ip' => $parts[1], 'referer' => $parts[2], 'uri' => $parts[3]];
}

function getLogs(string $date): array {
    $logs = [];
    $file = 'logs/'.$date.'.logs';
    if (file_exists($file)) {
        $fileLogs = fopen($file, 'r');
        while (!feof($fileLogs)) {
            $log = fgets($fileLogs);
            if ($log !== false) {
                array_push($logs, logStrToArr($log));
            }
        }
        fclose($fileLogs);
    }
    return $logs;
}

function isValidUrl(string $url): bool{
    $symbols = ['%27', '%20', '"', '\'', ',', ';', '`', '~', '!', '@', '$', '№', '%', '^', '*', 
                    '(', ')', '|', '{', '}', '[', ']', '<', '>', '+', '*' ];

    foreach ($symbols as $symbol) {
        if (strpos($url, $symbol) !== false) {
            return false;
        }
    }

    return true;
}
