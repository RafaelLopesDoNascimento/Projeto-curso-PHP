<?php 
include_once("templates/header.php");

?>
<body>
<div class="container">
  <?php include_once("./templates/backbtn.php")  ?>
  <h1 id="main-title">Editar Contato</h1>

<form action="<?=$BASE_URL ?>config/process.php" method="post" id="create-form">

<input type="hidden" name="type" value="edit"> 

<input type="hidden" name="id" value="<?=$contact["id"] ?>"> 
<div class="form-group">
  <label for="name">Nome do contato:</label>
  <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome" value=<?= $contact["name"] ?> required>
</div>
<div class="form-group">
  <label for="phone">Telefone do contato:</label>
  <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite o telefone" value=<?= $contact["phone"] ?> required>
</div>
<div class="form-group">
  <label for="observations">Observações:</label>
  <textarea type="text" name="observations" id="observations" class="form-control" placeholder=<?= $contact["observation"] ?> rows="3"  ></textarea>
</div>
<button type="submit" class="btn btn-primary">Atualizar</button>
</form>

</div>  

  
  <?php 
  include_once("templates/footer.php");
  // print_r($contacts)
  ?>