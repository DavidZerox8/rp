<?php

  session_start();

  if($_SESSION['tipo'] == 1){
    header('location: ../view/user/index.php');
  }else if($_SESSION['tipo'] == 2){
    header('location: ../view/admin/index.php');
  }

else
{
    header('location: ../index.php');
}

 ?>
