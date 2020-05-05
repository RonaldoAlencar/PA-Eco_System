<?php
  session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastro de hóspede</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container col-md-6">

      <h1 class="display-4">Cadastro de hóspede</h1>
      <?php
        if(isset($_SESSION['msg']))
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      ?>
      <form method="POST" action="processa.php">
        <div class="form-group">
          <label>Nome</label>
          <input type="text" name="nome" required="true" class="form-control" placeholder="Digite seu nome do hóspede">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" required="true" class="form-control" placeholder="Digite seu email">
        </div>
        <div class="form-group">
          <label>CPF</label>
          <input type="text" name="cpf" required="true" class="form-control" placeholder="Digite seu CPF">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" required="true" class="form-check-input">
          <label class="form-check-label">Concordo com todos os termos de utilização</label>
        </div>
      <div class="row">
        <div class="col" align="center">
          <button type="submit" class="btn btn-success">Cadastrar Hóspede</button>
        </div>
        <div class="col" align="center">
          <a href="listar.php" class="btn btn-primary" role="button">Listar usuários cadastrados</a>
        </div>
      </div>






      </form>

      

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>