<?php 
include_once ("./templates/header.php")

?>


<div class="container" id="view-contact-container">
  <?php include_once("./templates/backbtn.php")
?>
  <id id="main-title"><?=$contact['name'] ?></id>
  <p class="bold">Telefone:</p>
  <p><?=$contact['phone'] ?></p>
  <p class="bold">Observações:</p>
  <p><?=$contact['observation'] ?></p>
</div>

<?php  
include_once ("./templates/footer.php")

?>