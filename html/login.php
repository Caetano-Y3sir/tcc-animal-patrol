<?php
session_start(); 

include ("conexao.php");

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.html");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../stylelogin.css">
  <link rel="shortcut icon" type="image/jpg" href="../imagis/icone pag.png" />
  <title>Entrar</title>
</head>

<body>
  <div class="login">
    <div class="imagem"></div>
    <div class="page">
      <form method="POST" class="formLogin">
        <h1>Login</h1>
        <p>Digite os seus dados de acesso no campo abaixo.</p>
        <label for="email">E-mail</label>
        <input type="text" name="email" placeholder="Digite seu e-mail" autofocus="true" required />
        <label for="password">Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha" required />
        <a href="">Esqueci minha senha</a>
        <a href="">Esqueci meu <i>email</i></a>
        <h5>Não tem uma conta?<a href="cadastro.html">Cadastre-se</a></h5>
        <input type="submit" value="Enviar" class="btn" />
      </form>
      <a href="../index.html">
        <p class="hello"><b>Voltar à Pagina Inicial</b></p>
      </a>

    </div>
</body>

</html>