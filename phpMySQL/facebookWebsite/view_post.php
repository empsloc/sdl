<!DOCTYPE html>
<html>
<head>
    <title>View Posts</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>View Posts</h2>
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "facebook";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetching posts
        $sql = "SELECT * FROM posts";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='post'>";
                echo "<p>".$row["content"]."</p>";
                echo "<a href='delete_post.php?post_id=".$row["id"]."'>Delete</a>";
                echo "</div>";
            }
        } else {
            echo "No posts found.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
