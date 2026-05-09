<?php
require 'components/functions.php';
$posts = getPosts();
$category = $_GET['category'] ?? null;

if ($category) {
    $filtered = filterByCategory($posts, $category);
    $title = "Категория: $category";
} else {
    $filtered = $posts;
    $title = "Все посты";
}

require 'components/header.php';
?>

<?php if (empty($filtered)): ?>
    <p>Нет постов.</p>
<?php else: ?>
    <?php foreach ($filtered as $post): ?>
        <div class="post-preview">
            <h2><a href="post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h2>
            <p><strong>Автор:</strong> <?= $post['author'] ?> | <?= $post['date'] ?></p>
            <p><?= htmlspecialchars(substr($post['content'], 0, 150)) ?>...</p>
        </div>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>

<p><a href="index.php">← На главную</a></p>

<?php require 'components/footer.php';
