<?php
session_start();
if (!array_key_exists('ultimo_login', $_SESSION)) {
    $_SESSION['ultimo_login'] = date('H:i:s d/m/Y');
}
if (!array_key_exists('reqs', $_SESSION)) {
    $_SESSION['reqs'] = 1;
} else {
    $_SESSION['reqs']++;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- <link rel="stylesheet" type="text/css" href="../style/common.css"> -->
    <link rel="stylesheet" type="text/css" href="../style/index.css">

    <title>Login</title>
</head>

<body>
    
    <header>
        
        <div id="logo">
            <img id="img" src="../assets/images/logo.jpg" alt="Logotipo do Tribunal de Justiça de São Paulo" />
            <div id="tjsp">
                <p id="tj">Tribunal de Justiça</p>
                <p id="sp">Estado de São Paulo</p>
            </div>
        </div>
        
        <div id="saudacao">
            <p>Bem-vindo!</p>
        </div>

    </header>

    <main>

        <div class="conteiner-titulo">
            <h1>Gerador de Termos de Audiência</h1>
            <h2>Plantões do Juizado do Torcedor</h2>
        </div>

        <form method="post">
            <div>
                <label for="usuario">Usuário</label>
                <input type="email" id="usuario" name="usuario" />
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" />
            </div>
        </form>

        <a href="./audiencia.php"><button>Entrar</button></a>

        <p class="conteiner-oculto" id="erro-login">
            Usuário ou senha inválidos
        </p>

    </main>

    <footer>
        <p>
            Desenvolvido por alunos do Senac, para fins meramente acadêmicos (C)
            <!-- A sua sessão foi iniciada em
                <?php echo $_SESSION['ultimo_login'] ?>
                e você já fez
                <?php echo $_SESSION['reqs'] ?> requisições -->
        </p>
    </footer>

</body>

</html>