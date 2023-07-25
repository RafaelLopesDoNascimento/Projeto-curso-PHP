<?php 

include_once("config/url.php");
include_once ("config/connection.php");
include_once("config/process.php");

if (isset($_SESSION['msg'])) {
 $printMsg = $_SESSION['msg'];
 $_SESSION['msg'] = '';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootsrtap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css -->
  <link rel="stylesheet" href="<?=$BASE_URL ?>css/style.css">
  <title>Document</title>
</head>

<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<a class="navbar-brand" href="<?=$BASE_URL ?>index.php">
<img src="<?=$BASE_URL ?>/img/logo.svg" alt="Agenda" class="img-logo">
</a>
<div>
  <div class="navbar-nav">
  <a href="<?=$BASE_URL ?>index.php" class="nav-link active" id="home-link">Agenda</a>
  <a href="<?=$BASE_URL ?>create.php" class="nav-link active" >Adicionar Contato</a>
  </div>
</div>
</nav>

</header>