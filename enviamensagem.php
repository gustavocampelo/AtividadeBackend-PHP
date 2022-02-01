<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="js/scripts.js"></script>

    <title>Cadastrando você...</title>

</head>

<body>
    <?php

$ano = "" ;
$cpf = "" ;
$pessoa = "" ;
$nome = "" ;
$telefone = "" ;
$email= "" ;
$mensagem = "" ;
$dadoscompletos = false;

?>
    <div class="oi">
        <h1> Preencha abaixo </h1>
        <h2> e em seguida, confirme seu registro. </h2>


        <form action="sistema/recebemensagem.php" method="post">
            <input type="hidden" name="hdncontrole" value="formphp-enviamensagem">
            <label for="txtnome">Nome: </label>
            <br><input type="text" name="txtnome" id="txtnome" placeholder="Seu nome" value="<?php echo $nome; ?>">
            <br><label for="txtano">Ano de nascimento: </label>
            <br><input type="text" name="txtano" id="txtano" placeholder="Ano de nascimento" value="<?php echo $ano; ?>">
            <br><label for="txtemail">CPF: </label>
            <br><input type="text" name="txtcpf" id="txtcpf" placeholder="Seu CPF" value="<?php echo $cpf; ?>">
            <br><label for="txttelefone">Telefone: </label>
            <br><input type="tel" name="txttelefone" id="txttelefone" placeholder="Telefone fixo ou celular" value="<?php echo $telefone; ?>">
            <br><label for="txtemail">Email: </label>
            <br><input type="email" name="txtemail" id="txtemail" placeholder="Seu e-mail" value="<?php echo $email; ?>">
            <br><label for="txtcidade">Cidade: </label>
            <br><input type="text" name="txtcidade" id="txtcidade" placeholder="Insira sua cidade"
                value="<?php echo $mensagem; ?>">
            <br><br><input type="radio" name="pessoa" value="jurídica"
                <?php echo ($pessoa == "jurídica") ? "checked" : null; ?> />Pessoa Jurídica
<br>

            <input type="radio" name="pessoa" value="física"
                <?php echo ($pessoa == "física") ? "checked" : null; ?> />Pessoa Física
            <br>
            <br><input type="submit" value="Confirmar registro">
        </form>

    </div>
</body>

</html>