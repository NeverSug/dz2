<?php
$title = "Главная";
require 'components/functions.php';
$posts = getPosts();
$categories = getCategories($posts);
require 'components/header.php';
?>

<h2>Категории</h2>
<ul>
    <?php foreach ($categories as $cat): ?>
        <li><a href="posts.php?category=<?= urlencode($cat) ?>"><?= $cat ?></a></li>
    <?php endforeach; ?>
</ul>

<p><a href="posts.php">Все посты</a></p>

<?php require 'components/footer.php';
