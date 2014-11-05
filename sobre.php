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
        <?php include "./includes/topo.html" ?>
        
        <div id="content_1">
            <?php include "./includes/menu.html" ?>
        
            
            <div id="sobre">
                <h2>Sobre nós</h2>
                <h3>Conheça nossa história</h3>
                
                <p>
                    Me chamo Joséfa, minha loja começou quando vi minha amiga reclamando que nenhuma calcinha
                    estava boa na opinião de seu marido, pois o mesmo queria que ela nunca usasse calcinha.
                    Então pensei, vou inovar e criar linhas exclusivas para agradar os homens, linhas que sejam
                    confortáveis o suficiente a ponto de não coçar a pombinha ou causar desconforto na caverna.
                </p>
                <br/>
                <p>
                    Começamos a vender pela internet, hoje somos mais de 2 milhões de pombinhas felizes
                    usando CALCINHA DA MODA. Use e abuse, mulher inteligente é mulher que se cuida.
                </p>
                
            </div>
        </div>
        
        
        <?php include "./includes/rodape.html" ?>
        
        <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
        <script type="text/javascript">
            $('#upArrow').on("click", function (e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: '0px'}, 1000);
            });
            
        </script>
    </body>

</html>
