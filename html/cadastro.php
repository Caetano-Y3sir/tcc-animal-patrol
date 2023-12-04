<?php
session_start();
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if (mysqli_query($mysqli, $sql)) {
      header("Location: painel.html");

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }

    mysqli_close($mysqli);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../stylecadastro.css">
  <link rel="shortcut icon" type="image/jpg" href="../imagis/icone pag.png" />
  <title>Criar Conta</title>
</head>

<body background="../imagis/yokishine.jpg">
  <div class="login">
    <div class="page">
      <form method="POST" class="formLogin" action="cadastro.php">
        <h1>Criar conta</h1>
        <p>Digite os seus dados de acesso no campo abaixo.</p>
        <label for="nome">Nome de Usuário</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome de usuário" autofocus="true" required />
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email"placeholder="Digite seu e-mail" autofocus="true" required />
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required />
        <h5>Já tem uma conta?<a href="login.html">Entrar</a></h5>
        <a href="">Termo de Serviço</a>
        <a href="">Política de Privacidade</a>
        <input type="submit" value="Enviar" class="btn" />
      </form>
      <p></p>
      <div class="voltar">
        <a href="../index.html">
          <p class="hello"><b>Voltar à Página Inicial</b></p>
        </a>
      </div>
    </div>
</body>

</html>