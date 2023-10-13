<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/blog.css">
    <title>Tsquare's Blog</title>
</head>
<body>
    <div class="header"><h1><a href="/">Tsquare's Blog</a></h1></div>
    <?php foreach ($posts as $post ): ?>
    <article>
        <h1><a href="<?php echo $post->slug;?>"><?php echo $post->title;?></a></h1>
        <div>
            <?php echo $post->excerpt;?>
        </div>
    </article>
    <?php endforeach; ?>
</body>
</html>