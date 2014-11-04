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
        
            
            <div id="produtos">
                <h2>Conheça nossos produtos</h2>
                
                <!-- Load XML com ajax -->
                <!--<ul>-->
<!--                    <li>
                        <a href='#'>
                            <img src='images/produtos/prod1.jpg' alt=''/>
                            <label>Calcinha bla bla</label>
                            <p>Calcinha moderna e muito top, por apenas:</p>
                            <span>R$ 19,99</span>
                        </a>
                    </li>    -->
                <!--</ul>-->
                
                
            </div>
        </div>
        
        
        <?php include "./includes/rodape.html" ?>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.js"></script>
        <script type="text/javascript">
            $('#upArrow').on("click", function (e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: '0px'}, 1000);
            });
            
            
//            $(window).on("load", function () {

                $.ajax({
                    type: "GET",
                    url: "xml/produtos.xml",
                    dataType: "xml",
                    success: function (xml) {

                        $(xml).find('produtos item').each(function () {

                            var imagem = $(this).find("imagem").text();
                            var nome = $(this).find("nome").text();
                            var descricao = $(this).find("descricao").text();
                            var preco = $(this).find("preco").text();

                            var div = $("#produtos");
                                
                            div.append(
                                "<ul>"+
                                    "<li>"+
                                        "<a href='#'>"+
                                            "<img src='"+imagem+"' alt=''/>"+
                                            "<label>"+nome+"</label>"+
                                            "<p>"+descricao+"</p>"+
                                            "<span>"+preco+"</span>"+
                                        "</a>"+
                                    "</li>"+
                                "</ul>"
                                );
                            
                        });
                    },
                    error: function () {
                        alert("Ocorreu um erro inesperado durante o processamento.");
                    }
                });

//            });
            
        </script>
    </body>

</html>
