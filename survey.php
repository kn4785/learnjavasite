<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8">
<title>Survey</title>
<?php

  $title = "Survey";
  $path = './';
  require $path. '../../../dbConnect.inc';
    include "assets/include/loginCheck.php";

    ?>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');
* {font-family: 'Roboto', sans-serif;
   margin: 10px;
   padding: 0 5px;
}
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #d3d3d3;
  opacity: 0.9;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  top: -90%;
  left: 80%;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

.tooltiptext {
  font-size: .8vw;
    text-align: left;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 28%;
  left: -9%;
  margin-left: -5px;
  border-width: 9px;
  border-style: solid;
  border-color: transparent #d3d3d3 transparent transparent;
}
p {font-size: 1vw;
   padding: 0 10px 10px 7px;
line-height: 2.5vh;
}

.tooltip { margin: 0; padding: 1px; padding-left: 35px;}

#displayValue {padding: 0;}

h3 {color: #F76902;
	font-size: 2vw;
	font-weight: 400;
    margin-bottom: 0;
    line-height: 5vh;
    }

img { border: 0; }

input[type=text], input[type=number],select {
  width: 100%;
  padding: 12px 20px;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input:invalid:focus {
  border-color: #FA7268;
  background-color: pink;
}


input[type=submit] {
  width: 100%;
  background-color: #F76902;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #f15f01;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
label {font-size: .9vw;
	   margin: 0;
       padding: 3px;
}

select { height:40px;
		 background-color: #fdfdfd;
}

.slidecontainer {
  width: 100%;
  margin-left: 0;
  padding: 0;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #F76902;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #F76902;
  cursor: pointer;
}

#moreinfo {position: relative;
            padding: 0;
            margin:0;
            margin-left: -22px;
}
@media only screen and (max-width: 1100px) {
        p#parag{
            line-height: 3vh;
            font-size: 2.9vw;
        }
        h3{
            font-size: 4vw;
            line-height: 2.5vh;
        }
        label {font-size: 1.8vw;
	           margin: 0;
               padding: 3px;
        }
        #difficultyText {
            margin-bottom: 0;
            padding-top: 0;
            line-height: 1.8vh;
            font-size: 1.7vw;

        }
    }
    @media only screen and (max-width: 800px) {
        p#parag{
            line-height: 1.8vh;
            font-size: 2.2vw;
        }
        h3{ font-size: 4vw; }
        label {font-size: 2vw;
	           margin: 0;
               padding: 3px;
        }
        #difficultyText {
            margin-bottom: 0;
            padding-top: 0;
            line-height: 1.8vh;
            font-size: 1.7vw;

        }
    }


</style>
</head>
<body>
<a href="index.php" style="padding: 1rem; "><img src="assets/images/logo.png" alt="home"></a>

<h3>How are we doing?</h3>
<p id="parag">We made this site with the intention to help people learn java easier. We would love to hear how we can improve to provide a better experience to users like yourself. Please take a moment to fill out the following form to provide us with feedback about what worked and what didn't so that we can modify our site to make it better.</p>

<div>
  <form name="myForm" action="processForm.php" method="POST" class="surveyForm" onsubmit="return validateForm();">

    <!--      QUESTION 1       -->
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." pattern="^[a-z A-Z]+$" required="">


    <!--      QUESTION 2       -->
    <label for="age">Age</label>
    <div class="tooltip"><img id="moreinfo" onclick=" var a = findPos(this); RevLevel(a[0], a[1]); " src="./assets/images/question.png" height="12" width="12" alt="more info" ondragstart="return false;">
  <span class="tooltiptext">We collect these demographics to get insight about our users.</span>
  </div>
    <input type="number" id="age" name="age" min="1" max="100" placeholder="Enter age.." required="">

    <!--      QUESTION 3       -->
    <label for="siteref">How did you hear about our site?</label>
    <select id="siteref" name="siteref">
      <option value="teacher">Teacher</option>
      <option value="internet">Internet</option>
      <option value="friend">Friend</option>
      <option value="other">Other</option>
    </select>


    <!--      QUESTION 4       -->
    <label for="myRange">How difficult were the quizzes?</label>
    <div class="slidecontainer">
    <input type="range" min="1" max="10" value="5" class="slider" id="myRange" name="myRange">
    <p id="difficultyText">Difficulty:<span id="displayValue">5</span></p>
  </div>

  <script>
  var slider = document.getElementById("myRange");
  var output = document.getElementById("displayValue");
  output.innerHTML = slider.value;

  slider.oninput = function() {
    output.innerHTML = this.value;
  }
  </script>

   <!--      QUESTION 5       -->
  <label for="feature">What feature helped you learn Java the most?</label>
    <select id="feature" name="feature">
      <option value="exercises">Exercise</option>
      <option value="quizzes">Quizzes</option>
      <option value="lessons">Lessons</option>
      <option value="other">Other</option>
    </select>

    <!--      QUESTION 6       -->
   <label>How many external resources did you use in addiiton to our site?</label>
     <select id="eres" name="eres">
        <option value="eres1"> 1 </option>
        <option value="eres2"> 2 </option>
        <option value="eres3"> 3+ </option>
      </select>



    <input type="submit" value="Submit">
    <script>
      function validateForm() {
        var x = document.forms["myForm"]["name"].value;
        var z = document.forms["myForm"]["siteref"].value;
          if (x == "") {
          alert("Name must be filled out");
          return false;
          }
      }
</script>
  </form>
</div>
</body>
</html>
