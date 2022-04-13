<?php
    require_once 'connectToDB.php';

    $query = $pdo -> prepare('SELECT * FROM posts');
    $query -> execute();

    $response = $query -> fetchAll(PDO::FETCH_ASSOC);
    $responseLength = count($response);

    for ($i = 0; $i < $responseLength; $i++) {
        $postTitle = $response[$i]["postTitle"];
        $postDescription = $response[$i]["postDescription"];
        $postTag = $response[$i]["postTag"];
        $postedAt = $response[$i]["postedAt"];

        echo "
                <div class='forum-post'>
                    <a href='forum.php'>{$postTitle}</a>
                    <p>{$postDescription}</p>
                    <p>opened at {$postedAt} by Anonymous User to {$postTag}</p>
                </div>
             ";
    }
?>