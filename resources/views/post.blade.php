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
    
    <article class="blog-post">
        <div>
            <h1><?php echo $post->title;?></h1>
            <?php echo $post->body;?>
        </div>
        <div class="post-actions"><button><a href="/">Back</a></button></div>
    </article>
</body>
</html>