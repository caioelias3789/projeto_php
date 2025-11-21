<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pag_inicial.css">
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
                <a href="../php/produtos.php">Produtos</a>
                <a href="../php/recargas.php">Recarga</a>
                <a href="../php/perguntas.php">Perguntas</a>
            </nav>
        </div>
    </header>


    <section class="banner">
        <img src="../media/bannerclubejp.jpg" alt="Banner Nubus">
    </section>


    <section class="busca">
        <span>Conheça nossas vantagens</span>
        <input type="text" placeholder="Buscar informações">
    </section>


    <section class="servicos">
        <div class="container_servicos">

            <h2 class="titulo">Facilidade e agilidade para solicitar os serviços da <span>NuBus</span></h2>

            <div class="card">
                <img src="../media/recarga.png" alt="">
                <h3>Recarga</h3>
                <p>Recarregue o seu cartão <a href="recarga.php">Estudante</a>, <a href="recarga.php">Cidadão</a> e o
                    seu cartão de <a href="recarga.php">Vale Transporte</a>.</p>
            </div>

            <div class="card">
                <img src="../media/mapa.png" alt="">
                <h3>Ponto de recarga</h3>
                <p>Localize o <a href="pontoderecarga.php">Ponto de Recarga</a> mais próximo de você.</p>
            </div>

            <div class="card">
                <img src="../media/roubo.png" alt="">
                <h3>Perda e roubo</h3>
                <p>Saiba como proceder em caso de <a href="perdaeroubo.php">Perda e roubo</a> do seu cartão Nubus.</p>
            </div>

            <div class="card">
                <img src="../media/app.png" alt="">
                <h3>Baixar o aplicativo</h3>
                <p><a href="aplicativo.php">Baixe o nosso aplicativo</a> e tenha acesso aos nossos serviços na palma da
                    mão.</p>
            </div>

            <div class="card">
                <img src="../media/duvida.png" alt="">
                <h3>Perguntas Frequentes</h3>
                <p>Tire <a href="perguntas.php">AQUI</a> todas as suas dúvidas.</p>
            </div>

            <div class="card">
                <img src="../media/cartao.png" alt="">
                <h3>2ª Via do Cartão</h3>
                <p>Saiba como conseguir a <a href="segundavia.php">2ª Via</a> do seu cartão.</p>
            </div>

            <div class="card">
                <img src="../media/empresa.png" alt="">
                <h3>Para Empresas</h3>
                <p>Veja <a href="empresa.php">AQUI</a> como adquirir o vale transporte para os seus colaboradores.</p>
            </div>

            <div class="card">
                <img src="../media/contato.png" alt="">
                <h3>Contato</h3>
                <p>Clique <a href="contato.php">AQUI</a> e entre em contato com a Nubus.</p>
            </div>
        </div>
    </section>

    <section id="cartoes">

        <h1>O produto que se enquadra para você ou para a sua empresa. A <span>NuBus</span> tem.</h1>

        <img src="../media/cartao03.jpg" alt="">
        <img src="../media/cartao02.jpg" alt="">
        <img src="../media/cartao01.jpg" alt="">

    </section>

    <section class="mapa-completo">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.072574115424!2d-34.88444042500155!3d-7.117588492886079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ace7e0e72df47b%3A0x93cd30cc51996853!2sSINTUR-JP!5e0!3m2!1spt-BR!2sbr!4v1763413742267!5m2!1spt-BR!2sbr"
            title="Localização NuBus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
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

</body>

</html>