<?php
declare(strict_types=1);

function template(string $path, array $variables = []): string {
    $systemTemplateRenererIntoFullPath = "views/$path.php";
    extract($variables);
    ob_start();
    include($systemTemplateRenererIntoFullPath);
    return ob_get_clean();
}

function parseUrl(string $url, array $routes): array{
    $res = [
        'controller' => 'errors/e404',
        'params' => []
    ];
    
    foreach($routes as $route) {
        $matches = [];

        if(preg_match($route['test'], $url, $matches)) {
            $res['controller'] = $route['controller'];

            if(isset($route['params'])) {
                foreach($route['params'] as $name => $num) {
                    $res['params'][$name] = $matches[$num];
                }
            }

            break;
        }
    }

    return $res;
}

function checkUrl(string $url): bool {
    if (strpos($url, '//') === false && $url[strlen($url)-1] !== '/') {
        return true;
    }
    return false;
}

function conversionUrl(string &$url): string {
    // Удаляем все лишние слэши
    $url = preg_replace('~/+~', '/', $url);
    // Удаляем слэш в конце, если он есть
    $url = rtrim($url, '/');
    return $url;
}