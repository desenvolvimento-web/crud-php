<?php declare(strict_types=1);

function render_layout(string $content_filename, array $content_data = []): string
{
    return render(__DIR__ . '/../templates/_layout.phtml', [
        'content' => render($content_filename, $content_data),
    ]);
}
