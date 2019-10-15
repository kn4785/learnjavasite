<!-- Coding Cubs -->
<!-- 04-20-19 -->
<!-- ISTE240 Group Project-->

<?php
    //if there is a uname and pass then check it againts the db to see if they
    //should go to page.php
    //a session is an associatve array that will
    //presist BETWEE pages.
    $path = './';
	session_start();
	session_name("jamesrichardhabermas");
	$_SESSION['test']="Hello RIT person";
	//check if the passwords are the same:

	if(!empty($_POST['uname']) && !empty($_POST['pass']) ){
		//they are making an attempt!
		//connect to the db
	  require $path.'../../../dbConnect.inc';

		$stmt=$mysqli->prepare("SELECT password FROM teamLogIn WHERE username = ?");
		//bind
		$stmt->bind_param("s",$_POST['uname']);
		//go, do it
		$stmt->execute();
		//need the results from this
		$stmt->bind_result($res);
		$stmt->fetch();

		if (password_verify($_POST['pass'], $res)) {
			$_SESSION['login']=true;
			$_SESSION['name']=$_POST['uname'];
			header('Location: postLogIn.php');
		}

		$stmt->close();
	}else{
		//echo 'Nope uname/pass sent in';
	}

?>

<?php
$title = "Homepage";
$path = './';
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

  <div id="logInContainer">
    <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  		<div>
  			Username:
  			<input type="text" name="uname" size="30" />
  		</div>
  		<div>
  			Password:
  			<input type="password" name="pass" size="30" />
  		</div>
  		<div class="clearfix">
  			<input class="loginButtons" type="reset" value="Reset Form" />
  			<input class="loginButtons" type="submit" value="Enter Site" />
  			<input class="loginButtons" type="button" value="Register"
        onclick="window.location='register.php'" />
  		</div>
  	</form>
  </div>
</div>


<?php
$path = './';
include $path.'assets/include/footer.php';
?>

</body>
</html>
