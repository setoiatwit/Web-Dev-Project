<?php
    require_once 'scripts/loginUser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,width=device-width">
    <title>Login - Web Therapy</title>
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
        <section class="login-container">
            <div class="login-form-container">
                <form class="login-form">
                    <label>Username</label>
                    <br>
                    <input class="login-form-input" type="text" name="username" />
                    <br>
                    <label>Password</label>
                    <br>
                    <input class="login-form-input" type="password" name="password" />
                    <br>
                    <button class="submit-button" type="submit" name="submit">Login</button>
                </form>
            </div>
        </section>
        <footer class="footer-container">
            <header class="footer-header"><h2>Certified Web Therapy</h2></header>
        </footer>
    </main>
</body>
</html>