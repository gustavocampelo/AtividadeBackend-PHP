<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="js/scripts.js"></script>

    <title>Registrar-se</title>
    
</head>
<body>
    <div class="alunos">Gustavo Campelo & Henrique Gomes</div>
<div class='amor'>
<?php echo "<div class='container'>"; ?>
    <h1> Registre-se abaixo</h1>

    
<?php


$nome = "" ;
$ano = "" ;
$cpf = "" ;
$telefone = "" ;
$email= "" ;
$mensagem = "" ;
$dadoscompletos = false;

if (isset($_POST['txtnome'])) {
    $nome = $_POST['txtnome'];
}

if (isset($_POST['txtnome'], $_POST['txttelefone'],
          $_POST['txtemail'], $_POST['txtmensagem'])) {
    

    $nome = trim($_POST['txtnome']);
    $telefone = trim($_POST['txttelefone']);
    $email = trim($_POST['txtemail']);
    $cidade=  trim($_POST['txtcidade']);

    if(!empty($nome) &&
      !empty($telefone) && 
      !empty($email) && 
      !empty($cidade) ){

        $dadoscompletos = true;

    }

}

?>
<h3> <?php echo "e seja bem-vindo(a) $nome!" ; ?> </h3>


    
  <?php echo "<div class='resultado'>";
      if ($dadoscompletos) {
          echo "Nome: $nome <br>" ;
          echo "Nome: $ano <br>" ;
          echo "Telefone: $telefone<br>" ;
          echo "E-mail: $email<br>" ;
          echo "Cidade: $cidade<br>" ;
      }
    echo "</div>";
  ?> 
  </div>




<a href="enviamensagem.php" class="leia-mais"> Clique aqui para se registrar! </a>
    
    </div>
    </div>

</body>
</html>