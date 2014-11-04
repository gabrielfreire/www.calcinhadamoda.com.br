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
                <ul>
                                       
                </ul>
                
                
            </div>
        </div>
        
        
        <?php include "./includes/rodape.html" ?>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.js"></script>
        <script type="text/javascript">
            $('#upArrow').on("click", function (e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: '0px'}, 1000);
            });
            
            
            $(window).on("load", function () {

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

                            var ul = $("#produtos > ul");

                            ul.appendTo("<li>");
                                ul.appendTo("<a href='#'>");
                                    ul.appendTo("<img src='"+imagem+"' alt=''/>");
                                    ul.appendTo("<label>"+nome+"</label>");
                                    ul.appendTo("<p>"+descricao+"</p>");
                                    ul.appendTo("<span>"+preco+"</span>");
                                ul.appendTo("</a>");
                            ul.appendTo("</li>");

    //                            console.log(imagem+"\n");
                            //$("<li></li>").html(sTitulo + ", " + sAutor + ", " + sGenero).appendTo("#contentArea ul");
                        });
                    },
                    error: function () {
                        alert("Ocorreu um erro inesperado durante o processamento.");
                    }
                });

            });
            
        </script>
    </body>

</html>
