<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Create Post</h2>
        <form method="post" action="create_post_handler.php">
            <textarea name="content" placeholder="Write something..." required></textarea><br>
            <input type="submit" name="submit" value="Post" class="btn">
        </form>
    </div>
</body>
</html>
