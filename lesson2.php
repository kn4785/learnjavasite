<?php 
	$title = "Lesson 2";
	$path = './';
	require $path.'../../../dbConnect.inc';
		include $path . "assets/include/loginCheck.php";
		include $path . "assets/include/header.php";
        include $path . "assets/include/navbar.php";
?>
<style><?php include "assets/css/lesson.css"; ?></style>


<main>
  		
  		<div class="lessonWrapper">
  			<h1>LESSON #2: OBJECTS</h1>
  			<div class="lessonContent">
  				
				
				<h3>Scope</h3>
  				<p>Scope refers to the area where something (variable, method) can be accessed and is defined by the start curly brace and end curly brace {}. Scope is declared by using either "public" or "private". Generally, variables in java are declared as private meaning this is limited to just the method body in which that variable is declared. In the case of an attribute, for example the scope would be the object to which that attribute belongs. There are methods, which you'll read more about down below that allow you to get and set the value of that attribute, the attribute itself is only valid within the scope of the object. If something is declared as public it is accessible outside of the scope of the class it is in.</p>
				<!--In ONE ROW of IMAGES--> 
				<img src="assets/images/scopeNoError.gif" alt = "Scope No Error" class="imageL">
				<img src="assets/images/scopeError.gif" alt ="Scope Error" class = "imageR">
				<img src="assets/images/scopeOfVar.png" alt ="Scope of Variable" class = "imageC">
				
				
				<h3>Contstructors</h3>
				<p> Constructors are a special kind of method used to initialize objects, one of the main foci of Java. These constructors provide an object with a series of attributes, variables specific to a given instance of an object. Constructors can also be parameterized, allowing these attributes to be set to specific values when an object is created.</p>
				<img src="assets/images/GoodBothCon.png" alt = "Constructors Image" class="imageL">
				
				
				
				<h3>Methods</h3>
				<p>Accessor methods are used get the value of a private field. As a result, these methods usually have a prefix of “get”, and return the same data type as the field they are accessing. Mutator methods, on the other hand, are used to change the values of private fields. These methods usually have a prefix of “set”, and have no return type, instead having an input parameter.</p>
				<img src= "assets/images/AcMutat.jpg" alt = "Methods Image" class="imageR">
				
				
				<h3>Basic Syntax</h3>
					<ul>
						<li>Case Sensitivity − Java is case sensitive, which means variable Hello and hello would have different meaning in Java</li>
						<li>Class Names − For all class/file names the first letter should be in upper case. If several words are used to form a name of the class, each inner word's first letter should be capital. Example: class MyFirstJavaClass</li>
						<li>Name of the program file should exactly match the class name. Example: Assume 'MyFirstJavaProgram' is the class name. Then the file should be saved as 'MyFirstJavaProgram.java'</li>
						<li>Method Names − All method names should start with a Lower Case letter. If several words are used to form the name of the method, then each inner word's first letter should be in Upper Case.Example: public void myMethodName()</li>
						<li>Curly Braces - { } if you open you must close them. Go after declaring a class, around methods and constructors, used to define scope of loops.</li>
						<li>Indents - Hit the tab key when you plan to make a chunk of code within the scope of something.</li>
						<li>Semi-Colons - the ; symbol goes after intializing varibles/attributes, after method calls, System.out.println's, or importing from the Java API.</li>
				</ul>
				
				
  			</div>
  			<button onclick="window.location.href='./exercise2.php'" type="button" class="lbutton">Try an Exercise</button>
  		</div>

  	</main>

<?php
		include $path . "assets/include/footer.php";
?>
