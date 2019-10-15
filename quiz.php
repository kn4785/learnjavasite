<?php
$path = './';
include $path.'assets/include/loginCheck.php';
?>

<?php
$title = "Quiz";
$path = './';
include $path.'assets/include/header.php';
?>

<?php
$path = './';
include $path.'assets/include/navbar.php';
?>

<?php
	$path = './';
	$filename = 'quiz.php';
	$pagename = "Quiz";
	require $path.'../../../dbConnect.inc';

	if(isset($_POST['score'])) {
		$score = $_POST['score'];
		$user_name = $_SESSION['name'];

		$insert_sql = $mysqli ->prepare('INSERT INTO userQuiz (username, score) VALUES(?, ?) ');
		$insert_sql->bind_param("sd", $user_name, $score);
		$insert_sql->execute();
		$insert_sql->close();

		$destinationEmail = "RITISTprofessor@gmail.com";
		$email_subject = "Quiz Results from Code Cubs!";
		$body = "Hello! This is Code Cubs Java Tutorial sending you an email regarding your " .
					  "quiz score!\nYou scored a " . $score . " on the quiz!\nIf you want to do " .
						"better, please review the lessons and try again! Feel free to use external " .
						"resources should they be useful.\n\nThanks!\n\nCode Cubs Team";

		mail($destinationEmail, $email_subject, $body);
	}

	$sql = 'SELECT id, question, a1, a2, a3, a4, correct FROM teamQuiz';
	$res = $mysqli -> query($sql);

?>

	<script>
		function validateQuiz(){
			var amtQuestions = document.getElementsByClassName('answers').length;
			var amtRight = 0;
			for(var index = 1; index <= amtQuestions; index++){
				if(checkAnswer(index)){
					amtRight++;
				}
			}
			var score = calculateScore(amtQuestions, amtRight);
			insertScore(score);

			return true;
		}

		function checkAnswer(questionNumber){
			var answerList = document.getElementsByName('q'+questionNumber);
			var selectedAnswer = "";
			for(var index = 0; index < answerList.length; index++){
				if(answerList[index].checked){
					selectedAnswer = answerList[index].value;
				}
			}
			console.log(selectedAnswer);
			var correctAnswer = document.getElementById('correct_answer'+questionNumber).innerHTML;
			console.log(correctAnswer);

			if(selectedAnswer === correctAnswer){
				return true;

			} else {
				return false;
			}
		}

		function calculateScore(amtQuestions, amtRight){
			var result = amtRight/amtQuestions;
			return result;
		}

		function insertScore(score) {
			document.getElementById('score').value = score;
			alert('You scored a ' + score + ' on the quiz!');
		}
	</script>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="quiz" onsubmit="return validateQuiz();">
		<?php
			if(mysqli_num_rows($res) > 0) {
				echo "
					<div id='quizContainer'>
					<h2>Quiz</h2>
				";
				$iterator=1;
				while ($row = $res->fetch_assoc()){
					$answers = [$row["a1"], $row["a2"], $row["a3"], $row["a4"]];

					shuffle($answers);

					echo "
						<fieldset class='question' id=question".$iterator.">
							<legend class='questionText'>".$row['id'].". ".$row['question']."</legend>
							<div class='answers'>
								<div class='quizChoiceDiv'><input class='quizChoiceInput' value='".$answers[0]."' type='radio' name='q".$iterator."' id='a".$iterator."'><label class='quizChoiceLable' for='a".$iterator."'>".$answers[0]." </label></div>
								<div class='quizChoiceDiv'><input class='quizChoiceInput' value='".$answers[1]."' type='radio' name='q".$iterator."' id='b".$iterator."'><label class='quizChoiceLable' for='b".$iterator."'>".$answers[1]." </label></div>
								<div class='quizChoiceDiv'><input class='quizChoiceInput' value='".$answers[2]."' type='radio' name='q".$iterator."' id='c".$iterator."'><label class='quizChoiceLable' for='c".$iterator."'>".$answers[2]." </label></div>
								<div class='quizChoiceDiv'><input class='quizChoiceInput' value='".$answers[3]."' type='radio' name='q".$iterator."' id='d".$iterator."'><label class='quizChoiceLable' for='d".$iterator."'>".$answers[3]." </label></div>
								<p hidden id='correct_answer".$iterator."'>". $row['correct'] ."</p>
							</div>
						</fieldset>
					";
					$iterator++;
				}
				$res->free();
			}
		?>
		<input name=score type="text" id="score" readonly><br>

		<input type="submit" value="Submit" id="formSubmit">
		</div>
	</form>
	<?php
	$path = './';
	include $path.'assets/include/footer.php';
	?>
