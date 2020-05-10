<?php declare(strict_types=1);

function create(PDO $pdo)
{
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $inserted = insert_todo($pdo, $title);
    return json_encode(['ok' => $inserted]);
}

function read(PDO $pdo)
{
    $todos = query_todos($pdo);
    return render_layout(__DIR__ . '/../templates/index.phtml', ['todos' => $todos]);
}

function update(PDO $pdo, int $id)
{
    parse_str(file_get_contents('php://input'), $_PUT);
    $done = filter_var($_PUT['done'], FILTER_SANITIZE_STRING);
    $updated = update_todo($pdo, $id, $done === 'true');
    return json_encode(['ok' => $updated]);
}

function delete(PDO $pdo, int $id)
{
    $deleted = delete_todo($pdo, $id);
    return json_encode(['ok' => $deleted]);
}

function create_todos_table(PDO $pdo)
{
    return $pdo->exec('
        create table if not exists todos (
            id integer not null primary key autoincrement,
            title varchar not null,
            done bool not null default false,
            created_at datetime not null default current_timestamp
        )
    ');
}

function render_layout(string $content_filename, array $content_data = []): string
{
    return render(__DIR__ . '/../templates/_layout.phtml', [
        'content' => render($content_filename, $content_data),
    ]);
}
