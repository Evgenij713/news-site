<?php
declare(strict_types=1);

$role = $user['role'] ?? '';

if ($role === 1) {
    $date = URL_PARAMS['date'] ?? '';
    $logs = getLogs($date);
    foreach ($logs as $key => $log) {
        $logs[$key]['referer_danger'] = (isValidUrl($log['referer']) ? 0 : 1);
        $logs[$key]['uri_danger'] = (isValidUrl($log['uri']) ? 0 : 1);
    }
    
    $pageTitle = 'Просмотр логов';
    $pageContent = template('logs/v_admin', ['date' => $date]);
    
    // Проверяем, является ли запрос AJAX-запросом
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        // Возвращаем только содержимое логов
        echo template('logs/v_logs', ['logs' => $logs]);
        exit();
    }
}
else {
    header('Location:' . BASE_URL . 'e403');
    exit();
}
