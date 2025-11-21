<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="../css/cadastro.css">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../media/logo_aba.png">
    <title>Cadastro NuBus JP</title>
</meta>

<body>
    <div class="container">
        <form action="../php/cria_usuario.php" method="POST">
            <a href="../php/pag_inicial.php"><img src="../media/nubus.png" alt="logo" width="100px"></a>
            <h1>Cadastro Nubus</h1>
            <div id="nome">
                <input name="nome" placeholder="Seu Nome" type="text" required>
            </div>
            <div id="sobrenome">
                <input name="sobrenome" placeholder="Seu Sobrenome" type="text" required>
            </div>
            <div id="usuario">
                <input name="email" placeholder="Seu E-mail" type="email" required>
            </div>
            <div id="senha">
                <input name="senha" placeholder="Sua Senha" type="password" minlength="8" required>
            </div>
            <div id="remember">
                <label>
                    <input type="checkbox" name="remember">
                    Lembrar de mim
                </label>
            </div>
            <div id="botao">
                <button type="submit">Cadastrar</button>
                <p>Já possui uma conta? <a href="../php/login.php"><b>Faça o seu Login</b></a></p>
            </div>
        </form>
    </div>
</body>

</html>