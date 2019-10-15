<?php 
	$title = "Lesson 3";
	$path = './';
	require $path.'../../../dbConnect.inc';
		include $path . "assets/include/loginCheck.php";
		include $path . "assets/include/header.php";
        include $path . "assets/include/navbar.php";
?>
<style><?php include "assets/css/lesson.css"; ?></style>


<main>
  		
  		<div class="lessonWrapper">
  			<h1>LESSON #3: DECISIONS AND REPETITIONS</h1>
  			<div class="lessonContent">
  				
				<h3>Decisions</h3>
				<p>Decision statements prevent certain sections of code from running without a certain condition being met first.</p>
				
				<h3>Repitions</h3>
				<p>Looping in programming is a process used to repeat a certain section of code until a condition is met. Three main types of loops exist; for, while, and do while.</p>
				
				<h3>If-Else Statements</h3>
  				<p>The most common of these statement is the if/else statement; if a certain condition within the parenthesis following “if” is true, then any code following in the curly braces will be executed. An “else” statement can be added following this, specifying code to be run if the “if” statement is false. There are also stand alone if statments and nested if statements which is just an if within and if. </p>
				
				<!--In ONE ROW of IMAGES--> 
				<img src ="assets/images/ifelseStatement.gif" alt = "If Else Statement" class="imageL">
				<img src="assets/images/nestedIfStatement.png" alt = "Nested If Statement" class="imageC">
				<img src="assets/images/nestedIfFlowChart.png" alt = "Nested If FlowChart" class="imageR">
				
				
				<h3>Switch Statements</h3>
				<p>Switch statements are another kind of decision statement that instead test a value against a list of cases. If this value matches any cases, the corresponding code will run. Similar to an “else” statement, a default case can also be specified for a switch statement, in case the value happens to not match any cases within the statement.</p>
				
				<!--In ONE ROW of IMAGES--> 
				<img src ="assets/images/switch_statement.gif" alt = "Switch Statement" class="imageL">
				<img src ="assets/images/switchFlowChart.png" alt = "Switch Flow Chart" class ="imageR">
				
				<h3>Else-If Statements</h3>
				<p>Similar to the If-Else with a little bit of a Switch. Use this to specify a new condition if the first condition is false. Can add multiple/many else if's.</p>
				
				<!--In ONE ROW of IMAGES--> 
				<img src = "assets/images/elseifStatement.png" alt ="Else-If Statement" class="imageL">
				<img src = "assets/images/elseifflow-chart.png" alt="Else-If Flow Chart" class ="imageR">
				
				
				<h3>While Loop</h3>
				<p>While loops work in a similar way, except instead of taking multiple input parameters, they run based on a single boolean statement, much like an if statement. If the condition of the while loop is true, the loop runs; otherwise, it stops. </p>
				
				<!--In ONE ROW of IMAGES--> 
				<img src="assets/images/whileFlowChart.jpg" alt="While Flow Chart" class="imageL">
				<img src="assets/images/doandwhileImage.png" alt="Do-While and While Image" class ="imageR">
				
				<h3>Do-While Loop</h3>
				<p>The last type of loop, the do while loop, works much like a normal while loop, except with one key difference. Whereas for and while loops won’t run at all if their test conditions are not met, do while loops will always run at least once before testing their condition statement.</p>
				<img src="assets/images/dowhileFlowChart.png" alt = "Do-While Flow Chart">
				
				<h3>For Loop</h3>
				<p>For loops take an initial condition, a testing condition, and an increment/decrement statement. The loop runs until the variable in the initial condition no longer fits the testing condition, upon which the loop stops. </p>
				
				
				
  			</div>
  			<button onclick="window.location.href='./exercise3.php'"type="button" class="lbutton">Try an Exercise</button>
  		</div>

  	</main>

<?php
		include $path . "assets/include/footer.php";
?>
