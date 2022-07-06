<?php
session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}

session_start();
$_SESSION['user']=='';
unset($_SESSION['user']);
session_destroy();
header("location:index.php?msg=logout");
?>