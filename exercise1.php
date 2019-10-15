<?php 
	$title = "Exercise 1";
	$path = './';
	require $path.'../../../dbConnect.inc';
		include "assets/include/loginCheck.php";
		require "assets/include/header.php";
        include "assets/include/navbar.php";
?>

<script src="assets/js/script.js"></script>
    
<main>		
    <div class="exWrapper">
  		<h1>EXERCISE #1</h1><hr>
        
  		<div class="exContent"><br/>
            <ul>
  		        <li><input id="l1" type="checkbox"><label for="l1">
                &emsp;public class AddTwoIntegers {</label></li>

                <li><input id="l2" type="checkbox"><label for="l2">
                &emsp;&emsp;public static void String[] args {</label></li>
        
                <li><input id="l3" type="checkbox"><label for="l3">
                &emsp;&emsp;&emsp;int first = 10;</label></li>
                <li><input id="l4" type="checkbox"><label for="l4">
                &emsp;&emsp;&emsp;int second = 20;</label></li><br/>

                <li><input id="l5" type="checkbox"><label for="l5">
                &emsp;&emsp;&emsp;int sum = first + second;</label></li>
                <li><input id="l6" type="checkbox"><label for="l6">
                &emsp;&emsp;&emsp;product = first * second;</label></li><br/>

                <li><input id="l7" type="checkbox"><label for="l7">
                &emsp;&emsp;&emsp;System.println("The sum is: " + sum);</label></li>
                <li><input id="l8" type="checkbox"><label for="l8">
                &emsp;&emsp;&emsp;System.out.println("The product is: " + product);</label></li>
        
                <li><input id="l9" type="checkbox"><label for="l9">
                &emsp;&emsp;}&emsp;&emsp;</label></li>
                <li><input id="l10" type="checkbox"><label for="l10">
                &emsp;]&emsp;&emsp;</label></li><br/>
            </ul>
  		</div><hr>
    
  		<div class="instructionPane">
            <h2>Directions:</h2>
  		    <p>Using your new knowledge of program anatomy and variables, find the errors in the program above. Click on a line to select it if you see an error. When you think you've selected all of them, click the button below to check your work!</p><br/>
  		</div>
        
        <div class="exButtons">
            <button type="button" onclick="exOneCheck()">&#10003; Check Your Work</button>
            <div class="exButtonGroup">
  		        <button type="button" onclick="window.location.href='./lesson1.php'">&#171; Go Back</button>
  		        <button type="button" onclick="window.location.href='./lesson2.php'">Next Lesson &#187;</button>
            </div>
  		</div>
    </div>
</main>

<?php
		include $path . "assets/include/footer.php";
?>