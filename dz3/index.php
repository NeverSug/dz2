<?php
$array = [
    [
        "person" => "person_1.jpg",
        "data" => "March 15, 2018",
        "Colorlib" => "Colorlib",
        "title" => "How to Find the Video Games of Your Youth",
        "image" => "img_5.jpg",
    ],
    [
        "person" => "person_1.jpg",
        "data" => "March 15, 2018",
        "Colorlib" => "Colorlib",
        "title" => "How to Find the Video Games of Your Youth",
        "image" => "img_6.jpg",
    ],
    [
        "person" => "person_1.jpg",
        "data" => "March 15, 2018",
        "Colorlib" => "Colorlib",
        "title" => "How to Find the Video Games of Your Youth",
        "image" => "img_7.jpg",
    ],
    [
        "person" => "person_1.jpg",
        "data" => "March 15, 2018",
        "Colorlib" => "Colorlib",
        "title" => "How to Find the Video Games of Your Youth",
        "image" => "img_8.jpg",
    ],
    [
        "person" => "person_1.jpg",
        "data" => "March 15, 2018",
        "Colorlib" => "Colorlib",
        "title" => "How to Find the Video Games of Your Youth",
        "image" => "img_9.jpg",
    ],
    [
        "person" => "person_1.jpg",
        "data" => "March 15, 2018",
        "Colorlib" => "Colorlib",
        "title" => "How to Find the Video Games of Your Youth",
        "image" => "img_10.jpg",
    ],
    [
        "person" => "person_1.jpg",
        "data" => "March 15, 2018",
        "Colorlib" => "Colorlib",
        "title" => "How to Find the Video Games of Your Youth",
        "image" => "img_11.jpg",
    ],
    [
        "person" => "person_1.jpg",
        "data" => "March 15, 2018",
        "Colorlib" => "Colorlib",
        "title" => "How to Find the Video Games of Your Youth",
        "image" => "img_12.jpg",
    ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <section class="site-section py-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Latest Posts</h2>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12">
                    <div class="row">
                        <?php foreach ($array as $arr): ?>
                            <div class="col-md-6">
                                <a href="" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                    <img src="images/<?= $arr['image'] ?>" alt="Image placeholder">
                                    <div class="blog-content-body">
                                        <div class="post-meta">
                                            <span class="author mr-2"><img src="images/<?= $arr['person'] ?>" alt="Colorlib"> <?= $arr['Colorlib'] ?> &bullet;</span>
                                            <span class="mr-2"><?= $arr['data'] ?> &bullet;</span>
                                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                        </div>
                                        <h2><?= $arr['title'] ?></h2>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>