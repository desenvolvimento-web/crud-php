<?php declare(strict_types=1);

function query_todos(PDO $pdo): array
{
    $stmt = $pdo->query('select * from todos');
    return $stmt->fetchAll();
}

function insert_todo(PDO $pdo, string $title): bool
{
    $stmt = $pdo->prepare('insert into todos (title) values (:title)');
    $stmt->bindValue('title', $title, PDO::PARAM_STR);
    return $stmt->execute();
}

function update_todo(PDO $pdo, int $id, bool $done): bool
{
    $stmt = $pdo->prepare('update todos set done = :done where id = :id');
    $stmt->bindValue('done', $done, PDO::PARAM_BOOL);
    $stmt->bindValue('id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}

function delete_todo(PDO $pdo, $id): bool
{
    $stmt = $pdo->query('delete from todos where id = :id');
    $stmt->bindValue('id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}
