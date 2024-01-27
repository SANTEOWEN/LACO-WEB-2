<?php
  session_start();
  session_unset();
  session_destroy();

  header('Location: ..\1.student_login\student-login.php');
?>