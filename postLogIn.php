<?php
$title = "Homepage";
$path = './';
include $path.'assets/include/loginCheck.php';
include $path.'assets/include/header.php';
?>

<?php
$path = './';
include $path.'assets/include/navbar.php';
?>

<div id="welcomeContainer">

  <h1 id="title">Welcome!</h1>

  <h3 id="welcomeText">Welcome to Code Cubs Java Tutorial! We will educate you on
  the basics of Java, a computer programming language, and start you understanding
  of how a programming language works! In order to start our tutorial, please
  go to the login down below and registar a username and password! Afterwards,
  login in and use the navigation to go to Lesson 1!</h3>

  <div id="postLoginContainer">

    <h3 id="postLoginText">You're logged in! Enjoy the website!</h3>

  </div>

</div>


<?php
$path = './';
include $path.'assets/include/footer.php';
?>

</body>
</html>
