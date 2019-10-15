<style>

/* start of footer css */

.footer {
  margin-top: 10%;
  /*padding-top: 20%;*/
  padding-top: 5%;
  padding-bottom: 5%;
  background-color: #595959;
  z-index: 3;
}

.html5_validation_image {
  display: inline;
  margin-left: 13%;
  margin-right: 10px;
}

.css_validation_image {
  display: inline;
  margin-left: 10px;
}

.logo_footer {
  display: inline;
  margin-left: 12%;
  margin-right: 6%;
}

.other_links {
  display: inline;
}

.footer_nav_text {
  font-family: 'Quicksand', sans-serif;
  font-size: 2.0vw;
  color: #FFFFFF;
  display: inline;
  margin-left: 0.5%;
  margin-right: 0.5%;
}

.grid_footer {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
}

.grid1 {
  position: relative;
  grid-row: 1 / span 1;
  grid-column: 1 / span 1;
}

.grid2 {
  position: relative;
  grid-row: 1 / span 1;
  grid-column: 2 / span 1;
}

.grid3 {
  position: relative;
  grid-row: 1 / span 1;
  grid-column: 3 / span 1;
}

/* end of footer css */

</style>


<footer class="footer">
  <div class="grid_footer"> <!-- start of grid div -->
    <div class="grid1">


    <div class="css_validation_image">
      <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fserenity.ist.rit.edu%2F~kn4785%2F240%2Fteamproject%2Findex.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">
      <img src="assets/images/css_logo.png" alt="CSS photo can't be displayed">
      </a>
    </div>
   </div>

  <div class="grid2">
    <div class="logo_footer">
      <img src="assets/images/logo.png" alt="Can't display logo image">
    </div>
  </div>

  <div class="grid3">
    <div class="other_links">
      <a href="logOut.php"><p class="footer_nav_text">Log Out Here</p> </a>
    </div>
  </div>
</div> <!-- end of grid div -->
</footer>
