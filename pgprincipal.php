<?php


session_start();
if(($_SESSION['login']=='' or !isset ($_SESSION['login']) == true) )
{
  unset($_SESSION['login']);
  header('location:login.html');
  }

  
$logado = $_SESSION['login'];


  echo" Bem vindo $logado";
  ?>

    
<a href="logout.php" >logout</a>
