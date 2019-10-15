<?php 
	$title = "Lesson 1";
	$path = './';
	require $path.'../../../dbConnect.inc';
		include "assets/include/loginCheck.php";
		include "assets/include/header.php";
        include "assets/include/navbar.php";
?>
		<style><?php include "assets/css/lesson.css"; ?></style>




<main>
  		
  		<div class="lessonWrapper">
  			<h1>LESSON #1: THE BASICS AND ANATOMY OF A PROGRAM   </h1>
  			<div class="lessonContent">
				
				<img src = "assets/images/anatomy.png" class="imageC"> 
				
				<h3>Anatomy</h3>
				<p>Welcome to the first lesson! Many beginner java programs have a class, main method, variables with data types, and a way to display something to the user. Please work through the contents of this page to help you learn and better understand the contents of a program aka the image above.</p>
				
				<h3>Class</h3>
				<p>Classes and Objects are basic concepts of Object Oriented Programming which revolve around the real life entities. It is the basic building block of an object-oriented language such as Java--is a template that describes the data and behavior associated with instances of that class. Every java program begins with public class _class name_{ </p>
				<img src="assets/images/mainMethodClass.png" alt = "Class Image" class="imageL">
				
				<h3>Main Method</h3>
				<p>The main method acts as an entry point into a program. It always has the exact same signature, public static void main(String[] args). The lone parameter of this method, String[] args, refers to an array of strings passed as command line arguments into the program. This could include anything from ints to strings to whole files.</p>
				<img src="assets/images/mainMethod.png" alt = "Main Method Image" class="imageR" class="roundedc">
				
				
  				<h3>Data Types and Variables</h3>
  				<p>Data in Java can be generally be categorized into one of several primitive data types. Some of the more common types include ints (integer values between -2,147,483,648 and 2,147,483,647), doubles (numbers with decimals), strings (groups of characters), and chars (individual characters). Every variable (container that holds values that are used )will have a data type. Check out the images below to see more and how they are declared in a program.</p>
				<img src = "assets/images/datatypes.jpg" alt ="Data Types Image" class="imageL">
				<img src = "assets/images/variables.png" alt ="Variables Image" class="imageL">
				
				
				<h3>System</h3>
				<p>The System class has several useful methods used by the stream, the connection between user input and program output. Two of the most basic System methods are exit and out. The exit method takes in an int parameter, and ends a program when called, using that int as a status code for the program. Generally, a nonzero status code suggests that the program didn’t end normally. The out method—specifically here, out.println—prints a parameter to user output, allowing the user to see some passed output of a program.</p>
				<img src = "assets/images/SystemOutPrint.png" alt ="System.out.println Image" class="imageR">
				
				<h3>Conclusion of Lesson #1</h3>
				<p> Later on. Classes and objects used by the main method are defined outside the main method. Comments can be added throughout the code of the program to clarify what a section of code does to anyone unfamiliar with the structuring of your program.</p>
				
  			</div>
  			<button type="button" onclick="window.location.href='./exercise1.php'" class="lbutton">Try an Exercise</button>
  		</div>

  	</main>

<?php
		include $path . "assets/include/footer.php";
?>
