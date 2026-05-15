<?php
require __DIR__ . '/components/functions.php';

try {

    $id = $_GET['id'] ?? null;

    if (is_null($id)) {
        // throw new OutOfBoundsException('ID поста не передан');
        header('Location: /404.php?msg=' . urlencode('ID поста не передан'));
        exit;
    }

    if (!is_numeric($id)) {
        // throw new OutOfBoundsException('ID поста должен быть числом');
        header('Location: /404.php?msg=' . urlencode('ID поста должен быть числом'));
        exit;
    }

    $post = getPost($id);
} catch (OutOfBoundsException $e) {
    // http_response_code(404);
    // $error = "404: " . $e->getMessage();
    header('Location: /404.php?msg=' . urlencode('Пост с таким ID не найден'));
    exit;
} catch (Exception $e) {
    // http_response_code(500);
    // $error = "Ошибка сервера:" . $e->getMessage();
    header('Location: /500.php?msg=' . urlencode('Ошибка сервера'));
    exit;
}

?>
<?php if (!isset($error)): ?>
    <?php include __DIR__ . '/components/menu.php'; ?>

    <p><a href='posts.php'>Вернуться к постам</a></p>

    <article class="single-post">
        <h1><?= htmlspecialchars($post['title']) ?></h1>
        <p><strong>Автор:</strong> <?= htmlspecialchars($post['author']) ?></p>
        <p><strong>Дата:</strong> <?= htmlspecialchars($post['date']) ?></p>
        <p><strong>Категория:</strong> <?= htmlspecialchars($post['category_id']) ?></p>
        <div class="content">
            <p><?= htmlspecialchars($post['content']) ?></p>
        </div>
    </article>

    <p><a href="posts.php">← Все посты</a></p>
<?php else: ?>
    <?php include __DIR__ . '/components/menu.php'; ?>
    <?= htmlspecialchars($error) ?>
    <p><a href="posts.php">← Все посты</a></p>
<?php endif; ?>

<?php include __DIR__ . '/components/footer.php';
