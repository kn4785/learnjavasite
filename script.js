// Function to check Exercise 1
function exOneCheck() {
    var l1 = document.getElementById("l1").checked;
    var l2 = document.getElementById("l2").checked;
    var l3 = document.getElementById("l3").checked;
    var l4 = document.getElementById("l4").checked;
    var l5 = document.getElementById("l5").checked;
    var l6 = document.getElementById("l6").checked;
    var l7 = document.getElementById("l7").checked;
    var l8 = document.getElementById("l8").checked;
    var l9 = document.getElementById("l9").checked;
    var l10 = document.getElementById("l10").checked;

    if((!l1) && (l2) && (!l3) && (!l4) && (!l5) && (l6) && (l7) && (!l8) && (!l9) && (l10)) {
        alert("Congratulations! You found all the errors!");
    } else if (!l2) {
        alert("You missed an error! Hint: how do you declare the main method?");
    } else if (!l6) {
        alert("You missed an error! Hint: how do you declare a variable?");
    } else if (!l7) {
        alert("You missed an error! Hint: how do you print a line through the system output?");
    } else if (!l10) {
        alert("You missed an error! Hint: what kind of braces are used to group portions of a method?");
    } else {
        alert("Almost! Hint: one of the lines you selected doesn't include an error.")
    }
}
//End of Function to check Exercise 1



 // Function to check Exercise 2
    function exTwoCheck() {
      //grab the text input element value
      var textInput = document.getElementById("ex02test").value;
      var correctAnswer = "new Party();";
      //check if answer is correct
      if(textInput === correctAnswer){
        document.getElementById('errorMessage').innerHTML = "";
        alert("You have succesfully completed the excercise!");
      } else {
        document.getElementById('errorMessage').innerHTML = "Sorry, you did not type the correct answer. Please try again.";
      }

    }
//End of Function to check Exercise 2


    // Function to check Exercise 3
    function exThreeCheck() {
        var ex3 = document.getElementById("ex3").value;
        if(ex3 == "6") {
            alert("Congratulations! That's the correct output!");
        } else {
            alert("Almost! Be careful as you check the loops.");
        }
    }
//End of Function to check Exercise 3
