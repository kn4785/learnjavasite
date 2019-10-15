
<?php

	$title = "Thank you!";
	$path = './';
	require $path. '../../../dbConnect.inc';
		include "assets/include/loginCheck.php";

	if($mysqli) {

		$safeName = '/^[A-Za-z ]+$/';
	    function test_input($data) {
	    	$data = trim($data);
	    	$data = filter_var($data, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	    	$data = stripslashes($data);
	    	$data = htmlspecialchars($data);

    	return $data;

        }


    //sets variable equal to form input
	$name = test_input($_POST['name']);
	$age = test_input($_POST['age']);
	$siteref = test_input($_POST['siteref']);
	$myRange = test_input($_POST['myRange']);
	$feature= test_input($_POST['feature']);
	$eres = test_input($_POST['eres']);



		if(preg_match($safeName, $name) &&! empty($name)) {
	    	//echo "<p>Good</p>";
		}
		else {
			//echo "<p>Bad data</p>";
	    	$name = "Empty";
		}
		
		$destination_email = "kn4785@rit.edu, RITISTprofessor@gmail.com";  // your email address

	$stmt=$mysqli->prepare("INSERT INTO teamSurvey(name, age, siteref, myRange, feature, eres) VALUES(?, ?, ?, ?, ?, ?)");
	// sends to database
	$stmt->bind_param("ssssss", $name, $age, $siteref, $myRange, $feature, $eres);
	$stmt->execute();
	$stmt->close();
	
	}

$email_subject = "Code Cubs ISTE-240 Group Survey";
        $email_body = "Name: $name\n";
		//need .= to concatenate
        $email_body .= "Age: $age\n";
        $email_body .= "Reference: $siteref\n";
        $email_body .= "Quiz Difficulty: $myRange\n";
        $email_body .= "Most Helpful Feature: $feature\n";
		$email_body .= "External Resources Used: $eres\n";

mail($destination_email, $email_subject, $email_body);

?>


	<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto');
	* {font-family: 'Roboto', sans-serif;
   	   text-align: center;
	}
	p {font-size: 3vw;
	   line-height: 3vh;
	}
	h3 {color: #F76902;
		font-size: 8vw;
		font-weight: 400;
    	margin: 0;
    	line-height: 15vh;
    }

    .centerScreen {
    	margin: 20%;

    }

    h4{
    	font-size: 1vw;
    	line-height: 5vh;
    }
    </style>

	<div class="centerScreen">
	<h3>Thank you!</h3>
	<p>Your feedback is important to us.</p>
	<h4>Your browser will redirect to our homepage in 10 seconds.</h4>
	</div>

<?php
	header( "refresh:10;url=index.php" );
?>
