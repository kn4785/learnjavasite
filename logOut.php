<?php
  session_start();
  session_name("Group6JavaProject");
  session_destroy();
  header("Location: index.php");
?>
