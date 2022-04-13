<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,width=device-width">
    <title>Forum - Web Therapy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../css/styles.css" rel="stylesheet" />
    <script src="../js/scripts.js" type="text/JavaScript"></script>
</head>
<body>
    <nav class="navbar">
        <header class="navbar-header"><h1>Web Therapy</h1></header>
        <div class="navbar-links-container">
            <a class="navbar-link" href="index.php">Home</a>
            <a class="navbar-link" href="topics.php">Topics</a>
            <a class="navbar-link" href="forum.php">Forum</a>
            <a class="navbar-link" href="about.php">About Us</a>
            <a class="navbar-link" href="signUp.php">Sign Up</a>
            <a class="navbar-link" href="login.php">Login</a>
            <!--<button class="dark-mode-button" type="button"><i class="fa fa-moon-o"></i></button>-->
        </div>
    </nav>
    <main>
        <section class="forum-container">
            <div class="landing-header-container"></div>
            <header class="page-header"><h1>Forum</h1></header>
            <header class="section-header"><h1>Click on thread title to view comments</h1></header>
            <section class="forum-post-container">
                <button id="forum-create-post-button" class="forum-create-post-button">Create Post</button>
                <div class="forum-post">
                    <a href="forum.html">Help! I've been feeling down lately for the past few months!</a>
                    <p>opened at 12:46 Anonymous User to Depression</p>
                </div>
                <div class="forum-post">
                    <a href="forum.html">Anyone have any advice for me?</a>
                    <p>opened at 16:54 Anonymous User to Bipolar</p>
                </div>
                <div class="forum-post">
                    <a href="forum.html">I just don't know what to anymore...</a>
                    <p>opened at 18:23 Anonymous User to Substance Use</p>
                </div>
                <?php
                    require_once "scripts/getPosts.php";
                ?>

                <?php
                    require_once "scripts/createPost.php";
                ?>
                
                <div id="create-post-modal" class="create-post-modal">
                    <div class="create-post-modal-container">
                        <div class="create-post-modal-close">&times;</div>
                        <div class="create-post-modal-form-container">
                            <form class="create-post-form" method="post">
                                <label>Title</label><br>
                                <input type="text" name="title"><br>
                                <label>Description</label><br>
                                <textarea name="description"></textarea><br>
                                <label>Tags</label><br>
                                <select name="tag">
                                    <option value="Depression">Depression</option>
                                    <option value="Anxiety Disorder">Anxiety Disorder</option>
                                    <option value="Eating Disorder">Eating Disorder</option>
                                    <option value="Post Traumatic Stress Disorder">Post Traumatic Stress Disorder</option>
                                    <option value="Suicide">Suicide</option>
                                    <option value="Bipolar">Bipolar</option>
                                    <option value="Attention-Deficit/Hyperactivity Disorder">Attention-Deficit/Hyperactivity Disorder</option>
                                    <option value="Obsessive-Compulsive Disorder">Obsessive-Compulsive Disorder</option>
                                    <option value="Substance Use">Substance Use</option>
                                </select>
                                <br>
                                <button class="submit-button" type="submit" name="submit">Post</button>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    var createPostButton = document.getElementById("forum-create-post-button");
                    var createPostModal = document.getElementById("create-post-modal");
                    var closeModalButton = document.getElementsByClassName("create-post-modal-close")[0];

                    // When the user clicks the button, open the modal 
                    createPostButton.onclick = function() {
                        createPostModal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    closeModalButton.onclick = function() {
                        createPostModal.style.display = "none";
                    }
                </script>

            </section>
        </section>
        <footer class="footer-container">
            <header class="footer-header"><h2>Certified Web Therapy</h2></header>
        </footer>
    </main>
</body>
</html>