<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/perguntas.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../media/logo_aba.png">
    <title>NuBus JP</title>
</head>

<body>
    <header class="header">
        <div class="header-content">
            <a href="../php/pag_inicial.php"><img src="../media/nubus.png" width="142" height="45" class="logo" alt="logo"> </a>
            <nav class="nav-links">
                <a href="../php/pag_inicial.php">Início</a>
                <a href="../php/institucional.php">Institucional</a>
                <div class="dropdown" id="produtos-dropdown-wrapper">
                    <a href="../php/produtos.php" class="dropbtn">Produtos</a>
                    <div class="dropdown-content" id="produtos-dropdown-content">
                        <a href="../php/cidadao.php">Cidadão</a>
                        <a href="../php/estudante.php">Estudante</a>
                        <a href="../php/valetransporte.php">Vale Transporte</a>
                    </div>
                </div>
                <a href="../php/recargas.php">Recargas</a>
                <a href="../php/perguntas.php">Perguntas</a>
            </nav>
        </div>
    </header>

    <section class="container_texto">

        <section class="titulo">
            <h1>Perguntas Frequentes</h1>
        </section>

        <section class="texto">
            <h2>O que eu preciso levar para fazer a 2ª via do cartão?</h2>
            <p>
                Para o cartão Nubus Estudantil, leve CPF, carteira de estudante e pague a taxa de R$ 20,80.
                <br>
                Para o cartão Nubus Cidadão, leve CPF e pague a taxa de R$ 20,80.
            </p>

            <h2>Perdi o cartão. Preciso pagar pela 2ª via?</h2>
            <p>
                Sim, a 2ª via do cartão custa R$ 20,80. É possível solicitar a 2ª via do cartão Estudante e do cartão Cidadão na sede do SINTUR ou pelo WhatsApp.
            </p>
            <h2>Como fazer o cartão Nubus?</h2>
            <p>
                Para fazer o cartão Vale Transporte <a href="../php/valetransporte.php">clique aqui</a>.
                <br>
                Para fazer o cartão Estudante <a href="../php/estudante.php">clique aqui</a>.
                <br>
                Para fazer o cartão Cidadão <a href="../php/cidadao.php">clique aqui</a>.
            </p>
            <h2>O que é preciso para atualizar o Nubus Estudantil?</h2>
            <p>
                Para atualizar o cartão Nubus Estudantil, o aluno deve apresentar o cartão estudantil, a carteira de estudante e o comprovante de residência.
            </p>
            <h2>Onde e como fazer a 1ª via do Cartão Nubus Cidadão?</h2>
            <p>
                Para fazer o Cartão Cidadão, basta apresentar o CPF, documento de identidade com foto e número de telefone nos nossos pontos de atendimento ou solicitar via WhatsApp.
            </p>
            <h2>Como fazer recarga para pela internet?</h2>
            <p>Acesse o link de Recarga em nosso site para realizar sua recarga programada. Lembrando que para fazer a recarga programada é preciso ter login e senha para acessar o sistema.</p>
            <h2>Quais os valores das tarifas de ônibus?</h2>
            <p>
                João Pessoa: R$ 5,20
                <br>
                Santa Rita: R$ 5,40
                <br>
                Várzea Nova: R$ 5,20
                <br>
                Bayeux: R$ 5,20
                <br>
                Cabedelo (Via mar e jacaré / Via Intermares e Bessa): R$ 5,20
                <br>
                Cabedelo: (BR230) R$ 5,40
            </p>
            <h2>Quais os horários de funcionamento do SINTUR?</h2>
            <p>
                O SINTUR- JP funciona:
                <br>
                Segunda à sexta – 7h30 às 17hrs
                <br>
                Sábado – 8hrs às 12hrs
            </p>
            <h2>Perdi o meu cartão, o que eu faço agora?</h2>
            <p>
                Em caso de perda ou extravio do seu Nubus, entre em contato conosco pelo número 3221-9092 ou pelo e-mail cadastro@nubusjp.com.br para
                solicitar o bloqueio. Depois, basta ir à sede do Sintur, pagar a taxa de R$ 20,80 e retirar sua 2ª via do Nubus.
            </p>
        </section>

    </section>


    <footer>
        <div class="footer-principal">
            <div class="container footer-grid">
                <div class="coluna logo-contato">
                    <div class="logo-info-wrapper">
                        <img src="../media/logo3.png" alt="NuBus Logo Footer" class="logo-grande-footer">
                        <div class="info-contato-texto">
                            <p class="contato-titulo">NUBUS</p>
                            <p><a href="cidadao.php">Cidadão</a></p>
                            <p><a href="estudante.php">Estudante</a></p>
                            <p><a href="valetransporte.php">Vale Transporte</a></p>
                            <p><a href="aplicativo.php">Baixar APP</a></p>
                            <div class="endereco">
                                <p>Rua Treze de Maio, 103 - Centro</p>
                                <p>João Pessoa - PB CEP 58013-070</p>
                                <p>(83) 3221-9092</p>
                                <p>contato@nubusjpa.com.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="coluna links-servicos">
                    <p class="titulo-coluna">SERVIÇOS</p>
                    <ul>
                        <li><a href="solicitar_cartao.php">Solicitar Cartões</a></li>
                        <li><a href="perdaeroubo.php">Perda/Roubo</a></li>
                        <li><a href="baixa_app.php">Baixar APP</a></li>
                    </ul>
                </div>

                <div class="coluna links-informacoes">
                    <p class="titulo-coluna">INFORMAÇÕES</p>
                    <ul>
                        <li><a href="duvidas.php">Dúvidas</a></li>
                        <li><a href="https://rdv.nubusjp.com.br/recibo/recibos.aspx">RDV - Recibos</a></li>
                    </ul>
                </div>
                <div class="coluna logo-sindicato">
                    <p class="titulo-coluna">SITE SINDICATO</p>
                    <a href="https://sinturjp.com.br/" class="logo-sindicato-link">
                        <img src="../media/sinturlogo.png" alt="Sintur Logo" width="60" height="60">
                    </a>
                    <div class="redes-sociais">
                        <a href="https://www.youtube.com/@NuBussindicato"><img src="../media/youtube.png" alt="YouTube"
                                width="24"></a>
                        <a href="https://www.tiktok.com/@nubusindicatos?_t=ZM-8yT2wgaiHRO&_r=1"><img
                                src="../media/tiktok.png" alt="TikTok" width="24"></a>
                        <a href="https://www.linkedin.com/company/nubusoficial/"><img src="../media/linkedin.png"
                                alt="LinkedIn" width="24"></a>
                        <a href="https://www.instagram.com/nubus.jp?igsh=bGd0bGJsaGJ1aWRn"><img
                                src="../media/instagram.png" alt="Instagram" width="24"></a>
                        <a href="https://www.facebook.com/profile.php?id=61564190423566&mibextid=ZbWKwL"><img
                                src="../media/facebook.png" alt="Facebook" width="24"></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-direitos">
            <div class="container footer-copyright">
                <p>Política de Privacidade</p>
                <p>Desenvolvido por Caio Elias baseado no feito por MKT Fora de Série</p>
            </div>
        </div>
    </footer>

    <script src="../js/produtos.js"></script>

</body>

</html>