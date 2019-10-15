<?php 
	$title = "Exercise 2";
	$path = './';
	require $path.'../../../dbConnect.inc';
		include "assets/include/loginCheck.php";
		include "assets/include/header.php";
        include $path . "assets/include/navbar.php";
?>

<script src="assets/js/script.js"></script>
    
<main>		
    <div class="exWrapper">
  		<h1>EXERCISE #2</h1><hr>
        
  		<div class="exContent"><br/>
            <p>
              public class Party {<br>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;private int friendsInvited;<br>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;public Party(){<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;friendsInvited = 0;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;public get-friendsInvited(){<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return friendsInvited;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;public set-friendsInvited(int numberOfInvites){<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;friendsInvited = numberOfInvites;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;public sendInvitation(){<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set-friendsInvited(friendsInvited + 1);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
              }
            </p>
  		</div><hr>
    
  		<div class="instructionPane">
            <h2>Directions:</h2>
  		    <p>Using your new knowledge of how to use classes and objects, fill in the missing code below to create a new Party object using the default constructor in the class above.</p><br/>
          <div class="testDiv">
            <p>Party myBirthday = </p><input type="text" name="ex02test" id="ex02test"><br>
            <p id="errorMessage"></p>
          </div>
  		</div>
        
        <div class="exButtons">
            <button type="button" onclick="exTwoCheck()">&#10003; Check Your Work</button>
            <div class="exButtonGroup">
  		        <button type="button" onclick="window.location.href='./lesson2.php'">&#171; Go Back</button>
  		        <button type="button" onclick="window.location.href='./lesson3.php'">Next Lesson &#187;</button>
            </div>
  		</div>
    </div>
</main>

<?php
		include $path . "assets/include/footer.php";
?>