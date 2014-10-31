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
                    Uma loja legal, Uma loja legal, Uma loja legal, Uma loja legal,
                    Uma loja legal, Uma loja legal, Uma loja legal, Uma loja legal, Uma loja legal,
                    Uma loja legal, Uma loja legal, Uma loja legal,
                    Uma loja legal, Uma loja legal, Uma loja legal, Uma loja legal.
                </p>
                <br/>
                <p>
                    Uma loja legal, Uma loja legal, Uma loja legal, Uma loja legal,
                    Uma loja legal, Uma loja legal, Uma loja legal, Uma loja legal, Uma loja legal,
                    Uma loja legal, Uma loja legal, Uma loja legal,
                    Uma loja legal, Uma loja legal, Uma loja legal, Uma loja legal.
                    Uma loja legal, Uma loja legal, Uma loja legal, Uma loja legal,
                    Uma loja legal, Uma loja legal, Uma loja legal, Uma loja legal, Uma loja legal,
                    Uma loja legal, Uma loja legal, Uma loja legal,
                    Uma loja legal, Uma loja legal, Uma loja legal, Uma loja legal.
                </p>
                
            </div>
        </div>
        
        
        <?php include "./includes/rodape.html" ?>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.js"></script>
        <script type="text/javascript">
            $('#upArrow').on("click", function (e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: '0px'}, 1000);
            });
            
        </script>
    </body>

</html>
