<?php
require __DIR__ . '/app/functions.php';

try {

    $posts = getPosts();
    $categorySlug = $_GET['category'] ?? null;


    if (!isset($posts)) {
        header('Location: /error-tmp.php?code=404');
        exit;
    }


    if ($categorySlug) {
        $filtered = getPostsCategoriesBySlug($categorySlug);
        $categoryInfo = getCategoryBySlug($categorySlug);
        $title = "Категория: " . $categoryInfo['name'];
    } else {
        $filtered = $posts;
        $title = "Все посты";
    }
} catch (Exception $e) {
    $errorId = 'ERR_' . date('Ymd_His') . '_' . uniqid();

    $errorDetails = [
        'message' => $e->getMessage(),
        'errorId' => $errorId,
        'line' => $e->getLine(),
        'trace' => $e->getTraceAsString()
    ];
    error_log(json_encode($errorDetails, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    redirectToError(404, $e->getMessage(), $errorId);
}


include __DIR__ . '/components/menu.php';
?>

<?php if (!isset($error)): ?>
    <?php if (empty($filtered)): ?>
        <p>Нет постов.</p>
    <?php else: ?>
        <?php foreach ($filtered as $post): ?>
            <div class="post-preview">
                <h2><a href="post.php?id=<?= htmlspecialchars($post['id']) ?>"><?= htmlspecialchars($post['title']) ?></a></h2>
                <p><strong>Автор:</strong> <?= htmlspecialchars($post['author']) ?> | <?= htmlspecialchars($post['date']) ?></p>
                <p><?= htmlspecialchars(substr($post['content'], 0, 150)) ?>...</p>
            </div>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>
<?php else: ?>
    <?= htmlspecialchars($error) ?>
<?php endif; ?>

<p><a href="index.php">← На главную</a></p>

<?php include __DIR__ . '/components/footer.php';
