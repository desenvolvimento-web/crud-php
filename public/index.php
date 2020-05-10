<?php declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$dsn = $_ENV['PDO_DSN'] ?? 'sqlite:' . __DIR__ . '/../db.sqlite';
$conn = conn($dsn);

create_todos_table($conn);

if (route_is('POST', '/todos')) {
    header('Content-type: application/json');
    echo create($conn);
}

if (route_is('GET', '/')) {
    header('Content-type: text/html');
    echo read($conn);
}

if (route_is('GET', '/create')) {
    header('Content-type: text/html');
    echo render_layout(__DIR__ . '/../templates/form.phtml');
}

if ($route_params = route_match('PUT', '|/todos/(\d+)|')) {
    header('Content-type: application/json');
    echo update($conn, intval($route_params[1]));
}

if ($route_params = route_match('DELETE', '|/todos/(\d+)|')) {
    header('Content-type: application/json');
    echo delete($conn, intval($route_params[1]));
}
