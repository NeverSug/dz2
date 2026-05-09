<?php
function getPosts()
{
    return json_decode(file_get_contents('posts.json'), true);
}

function getCategories($posts)
{
    return array_unique(array_column($posts, 'category'));
}

function findPostById($posts, $id)
{
    foreach ($posts as $post) {
        if ($post['id'] == $id) return $post;
    }
    return null;
}

function filterByCategory($posts, $category)
{
    return array_filter($posts, fn($p) => $p['category'] === $category);
}
