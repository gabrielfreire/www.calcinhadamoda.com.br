<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>..::CALCINHA DA MODA::..</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/calcinhadamoda.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <?php // include "./includes/topo.html" ?>
        <!-- Topo do site -->
        <div id="top">            
            <h1>Calcinha da Moda</h1>
            <p>PARA A MULHER QUE SE VALORIZA</p>
            <img src="images/arrow.png" alt="" />
        </div>
        
        
        <div id="content_1">
            <?php include "./includes/menu.html" ?>
        
            
            <div id="info">
                <h1>Bem vindo!</h1>
                <img src="images/index_img1.jpg" alt="" class="index_img"/>
                <img src="images/index_img2.jpg" alt="" class="index_img"/>
                <img src="images/index_img3.jpg" alt="" class="index_img"/>

                <br/>             
                <p>
                    A CALCINHA DA MODA invova em seus produtos, venha conhecer a nossa loja feita
                    especialmente para você.
                    Temos calcinhas fio-dental para você surpreender seu marido e deixá-lo feliz
                    com seu novo estilo, causar aquele efeito UAU não será mais impossível, mesmo sendo feia.
                </p>

                <p>
                    Já pensou em se destacar quando está no vestiário feminino? Inveja toda mulher tem, 
                    mas com nossos produtos a inveja vai doer mais, tenha certeza. Pensando nisso,
                    ganhe um kit de defesa pessoal, servirá para amigas invejosas e tarados de plantão.
                    Conheça também nossa linha de calcinha para fantasias, torne-se uma mulher maravilha em 
                    instantes, mulher pêra ou mulher abacate; mas se não comprar nenhum produto, será
                    apenas uma mulher tonta.
                </p>
             
            </div>
        </div>
        
        
        <div id="content_2">
            <h2>Clientes</h2>
            <img src="images/clientes/logo-1.png" alt="" />
            <img src="images/clientes/logo-2.png" alt="" />
            <img src="images/clientes/logo-3.png" alt="" />
            <img src="images/clientes/logo-4.png" alt="" />
            <img src="images/clientes/logo-5.png" alt="" />
            <img src="images/clientes/logo-6.png" alt="" />
            
        </div>
        
        <?php include "./includes/rodape.html" ?>
        
        <!-- Javascript do site -->
        <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
        <script type="text/javascript">
            $('#upArrow').on("click", function (e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: '0px'}, 1000);
            });

        </script>
    </body>

</html>
