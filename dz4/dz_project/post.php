<?php
require 'components/functions.php';
$posts = getPosts();
$id = $_GET['id'] ?? null;
$post = findPostById($posts, $id);

if (!$post) {
    $title = "Не найдено";
    require 'components/header.php';
    echo "<h1>Пост не найден</h1>";
    echo "<p><a href='posts.php'>Вернуться к постам</a></p>";
} else {
    $title = $post['title'];
    require 'components/header.php';
?>
    <article class="single-post">
        <h1><?= $post['title'] ?></h1>
        <p><strong>Автор:</strong> <?= $post['author'] ?></p>
        <p><strong>Дата:</strong> <?= $post['date'] ?></p>
        <p><strong>Категория:</strong> <?= $post['category'] ?></p>
        <div class="content">
            <p><?= $post['content'] ?></p>
        </div>
    </article>
    <p><a href="posts.php">← Все посты</a></p>
<?php } ?>

<?php require 'components/footer.php';
