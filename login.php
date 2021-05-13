
<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']) {
    $usuarios = [
        [
            "nome" => "Aluno Ricardo",
            "email" => "aluno@coder.com.br",
            "senha" => "123456",
        ],
        [
            "nome" => "Aluno Ricardo",
            "email" => "outro@coder.com.br",
            "senha" => "123478",
        ]
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body class="login">
     <header class="cabecalho">
          <h1>Curso PHP</h1>
          <h2>Visualização do Exercicio</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
        <h3>Identifique-se</h3>
        <?php if ($_SESSION['erros']): ?>
                <?php foreach ($_SESSION['erros'] as $erros): ?>
                <p><?= $erro ?></p>
                <?php endforeach ?>
        </div>
        <?php endif ?>
        <form action="#" method="post">
           <div>
               <label for="email">E-mail</label>
               <input type="email" name="email" id="email">
            </div>
            <div>
               <label for="email">Senha</label>
               <input type="password" name="senha" id="email">
            </div>
            <button>Entrar</button>
          </form>
    </main>
    <footer>
         Ricardo <?=date('Y'); ?>
    </footer>
    <nav class="navegacao">
    </nav>
</body>
</html>
