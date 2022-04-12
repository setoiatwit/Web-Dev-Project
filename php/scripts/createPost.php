<?php
if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $tag = $_POST["tag"];

    $forumPost = "forum-post";
    $forumPHP = "forum.php";

    echo "<div class={$forumPost}><a href={$forumPHP}>{$title}</a><p>{$description}</p><p>opened 5 hours ago by Anonymous User to {$tag}</p></div>";
}
?>