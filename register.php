<?php
	//check if the passwords are the same:
	//if there are uname, pass, pass2 and both pass same them put them in the database
	if(!empty($_POST['uname']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && passMatch()){
		//connect to the db
		require $path.'../../../dbConnect.inc';
        //put stuf into the database

        //Since data is comming form the user
        //you need to use prepare statements
		$stmt=$mysqli->prepare("INSERT INTO teamLogIn (username, password) VALUES(?,?)");
		//bind params(type of think being sent "ss", uname, hassed pass
		$stmt->bind_param("ss",$_POST['uname'],password_hash($_POST['pass'],PASSWORD_DEFAULT));
		//go, do it
		$stmt->execute();
		$stmt->close();
		//put them back to index to re-login
		header('Location: postLogIn.php');
	}

	function passMatch(){
		if(strcmp($_POST['pass'],$_POST['pass2'])==0){
			return true;
		}else{
			return false;
		}
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


<div id="registerContainer">

  <h1 id="title">Please register below</h1>

  <div id="logInContainer">

  <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			User Name:
			<input type="text" name="uname" size="30" />
		</div>
		<div>
			Password:
			<input type="password" name="pass" size="30" />
		</div>
		<div>
			Password (again):
			<input type="password" name="pass2" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" value="Submit Form" />
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
