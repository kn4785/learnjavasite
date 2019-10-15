<?php
	session_start();
	session_name("Group6JavaProject");
	//should they be here?

	//var_dump($_SESSION);

	if(!$_SESSION['login']){
	    //THEY ARENT LOGGED IN  (Didn't come in thru login)
		header('Location: index.php');
	}

?>
