<?php
if (isset($_POST["submit"])) {
    if ($_POST["title"] == "" or $_POST["description"] == "" or $_POST["tag"] == "") {
        echo "<center><h1>Form is empty<h1></center>";
    }
    else {
        require_once 'connectToDB.php';
        $postId = uniqid();
        $postTitle = $_POST["title"];
        $postDescription = $_POST["description"];
        $postTag = $_POST["tag"];

        date_default_timezone_set("America/New_York");
        $postedAt = date("H:i");

        $query = $pdo -> prepare('INSERT INTO posts (postId, postTitle, postDescription, postTag, postedAt) VALUES (?, ?, ?, ?, ?)');
        $query -> execute(array($postId, $postTitle, $postDescription, $postTag, $postedAt));

        echo "
                <div class='forum-post'>
                    <a href='forum.php'>{$postTitle}</a>
                    <p>{$postDescription}</p>
                    <p>opened at {$postedAt} by Anonymous User to {$postTag}</p>
                </div>
             ";
    }
}
?>