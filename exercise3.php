<?php 
	$title = "Exercise 3"; 
	$path = './';
	require $path.'../../../dbConnect.inc';
		include "assets/include/loginCheck.php";
		include "assets/include/header.php";
        include "assets/include/navbar.php";

?>

<script src="assets/js/script.js"></script>
    
<main>		
    <div class="exWrapper">
  		<h1>EXERCISE #3</h1><hr>
        
  		<div class="exContent"><br/>
            <ul>
  		        <li>&emsp;public class Loops {</li>
                <li>&emsp;&emsp;public static void main(String[] args) {</li>
        
                <li>&emsp;&emsp;&emsp;int i;</li>
                <li>&emsp;&emsp;&emsp;int k = 10;</li><br/>

                <li>&emsp;&emsp;&emsp;for(i = 0; i &#60; k; i++) { </li>
                <li>&emsp;&emsp;&emsp;&emsp;k-=2;</li>
                <li>&emsp;&emsp;&emsp;}</li><br/>
                
                <li>&emsp;&emsp;&emsp;while(k &#62; 0) {</li>
                <li>&emsp;&emsp;&emsp;&emsp;i+=2;</li>
                <li>&emsp;&emsp;&emsp;&emsp;k--;</li>
                <li>&emsp;&emsp;&emsp;}</li><br/>
                
                <li>&emsp;&emsp;&emsp;switch(i) {</li>
                <li>&emsp;&emsp;&emsp;&emsp;case 6:</li>
                <li>&emsp;&emsp;&emsp;&emsp;&emsp;i+=4;</li>
                <li>&emsp;&emsp;&emsp;&emsp;&emsp;break;</li><br/>
                
                <li>&emsp;&emsp;&emsp;&emsp;case 8:</li>
                <li>&emsp;&emsp;&emsp;&emsp;&emsp;i-=2;</li>
                <li>&emsp;&emsp;&emsp;&emsp;&emsp;break;</li><br/>
                
                <li>&emsp;&emsp;&emsp;&emsp;case 10:</li>
                <li>&emsp;&emsp;&emsp;&emsp;&emsp;i+=1;</li>
                <li>&emsp;&emsp;&emsp;&emsp;&emsp;break;</li>
                <li>&emsp;&emsp;&emsp;}</li><br/>
                
                <li>&emsp;&emsp;&emsp;System.out.println("The output is: " + i);</li><br/>
            </ul>
  		</div><hr>
    
  		<div class="instructionPane">
            <h2>Directions:</h2>
  		    <p>Using your new knowledge of loops and decision statements, guess the output of the above code. Read over it carefully, and break down what each loop outputs, as well as the result of each decision statement. When you think you have the output, enter it below, then click the button to check your answer!</p><br/>
            The output is: <input id="ex3" type="number" /><br/>
  		</div>
        
        <div class="exButtons">
            <button type="button" onclick="exThreeCheck()">&#10003; Check Your Work</button>
            <div class="exButtonGroup">
  		        <button type="button" onclick="window.location.href='./lesson3.php'">&#171; Go Back</button>
  		        <button type="button" onclick="window.location.href='./quiz.php'">Take the Quiz &#187;</button>
            </div>
  		</div>
    </div>
</main>

<?php
		include $path . "assets/include/footer.php";
?>