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
        
            
            <div id="contato">
                <h2>Formulário de contato</h2>
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d116976.85869013754!2d-46.783749150000006!3d-23.621296700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1414786578034" frameborder="0"></iframe>
                <form action="#" method="post">                
                    <input type="text" name="nome" placeholder="Nome*" />
                    <input type="text" name="email" placeholder="Email*" />
                    <input type="text" name="telefone" />
                    <textarea name="mensagem" placeholder="Mensagem*"></textarea>
                    <input type="submit" name="enviar" value="ENVIAR" />
                </form>
         
                <blockquote>                    
                    <strong>9870 Regis Bittencourt,<br/> Taboão da Serra - SP</strong>
                    <br/><br/>
                    <p>Telefone:  +1 800 603 6035</p>
                    <p>FAX:        +1 800 889 9898</p>
                    <p>E-mail: 
                        <a href="mailto:contato@calcinhadamoda.com.br">contato@calcinhadamoda.com.br</a>
                    </p>
                </blockquote>
                
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
