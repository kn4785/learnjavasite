<?php
	$title = "Comments Blog";
	$path = './';
  	require "../../../dbConnect.inc";
  	include "assets/include/loginCheck.php";
	include $path. "assets/include/header.php";
    include "assets/include/navbar.php";
?>

<?php
if ($mysqli) {
	  if (isset($_GET['name']) && isset($_GET['comment'])) {
	  if( $_GET['name']!='' && $_GET['comment']!='' ){
		  
		  //remove special characters
		  function test_input($data){ 
		  	$data = trim($data); 
			$data = stripslashes($data); 
			$data = htmlspecialchars($data); 
			return $data; 
		  }
		
		    $fullname = test_input($_GET['name']);
	  		$comment = test_input($_GET['comment']); 
			
		$stmt=$mysqli->prepare("INSERT INTO teamComments (name, comment) VALUES(?,?)");
		$stmt->bind_param("ss", $fullname, $comment);
		$stmt->execute();
		$stmt->close();
		  
	  }//end of if to make sure data is sent using $_GET
      }//end of isset
	  
	  
	  //get contents of table and send back...
      $sql = 'select name, comment from teamComments';
	  $res = $mysqli->query($sql);
		
	  if($res = $mysqli->query($sql)){
		  while($rowHolder = $res->fetch_assoc()){
			$field1name = $rowHolder["name"];
			$field2name = $rowHolder["comment"];
			  
		  }
		  $res->free();
	  }
}//end of if $mysqli statement
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Comments</title>
	<meta charset="utf-8" />
	<meta name = "viewport" content = "width=device-wdith, initial-scale=1">
	<link href="../assets/css/vietnam.css" rel="stylesheet">
	<script src="../assets/js/vietnam.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body id="commentsBody">
	
	<!-- Page header for blog comments --> 
	<header class = "headerComments">
		<div class = "row"> 
			<h2 class = "heading">LEAVE YOUR COMMENTS BELOW!</h2>
			   <?php

            $filename = 'comments.php';
            if (file_exists($filename)) {
                echo "Last modified: " . date ("l, F d Y h:ia", filemtime($filename));
            }
            ?>
		</div>
	</header>
	
	<div class = "row"> 
		<div class = "col-3-of-4">
			<div class="comment_form">
				<form id = "commentsForm" action = " <?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
				
				<!-- NAME textbox in form --> 
				<div class = "form_group">
				<input type="text" name="name" class="form_input" id="name" placeholder="Enter Your Name">
				</div>
				
				<!-- COMMENT textbox in form --> 
				<div class = "form_group"> 
				<textarea class="form_textarea" name="comment" id="comment" cols="70" rows="10" placeholder="Write Comments Here"></textarea>
				</div>
				
				<!-- Submit button in form --> 
				<div class = "form_group">
				<button name = "btn" id ="btn" value ="add to list">Submit
				</button>
				</div>
				</form>	
			</div>
		</div>
	</div>
	
	<?php
	
		$sql = 'select name, comment from teamComments';
	
		echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <th> <font face="Lato">Name</font> </th> 
          <th> <font face="Lato">Comment</font></th> 
           
      </tr>';
 
if ($res = $mysqli->query($sql)) {
    while ($rowHolder = $res->fetch_assoc()) {
        $field1name = $rowHolder["name"];
        $field2name = $rowHolder["comment"];
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
              </tr>';
    }
    $res->free();
} 
?>	
