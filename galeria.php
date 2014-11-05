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
        <link href="css/fancy.css" rel="stylesheet" type="text/css" />
        <link href="js/fancy/jquery.fancybox.css?v=2.1.0" rel="stylesheet" type="text/css" media="screen"/>
        <link href="css/calcinhadamoda.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <?php include "./includes/topo.html" ?>
        
        <div id="content_1">
            <?php include "./includes/menu.html" ?>
        
            
            <div id="galeria">
                <h2>Minha galeria</h2>
                
                
                
                
                <div class="thumbnails">
                    
                    <!-- Load XML com ajax -->
                </div>            
                
            </div>
        </div>
        
        
        <?php include "./includes/rodape.html" ?>
        
        
        <!-- Exclusivamente aqui usamos versao 1.8 para rodar o Fancybox -->
        <script type="text/javascript" src="js/jquery-1.8.min.js"></script> 
        
        <script type="text/javascript" src="js/fancy/jquery.fancybox.js?v=2.1.0"></script>	
        <script type="text/javascript" src="js/fancy/jquery.mousewheel-3.0.6.pack.js"></script>	
        <script type="text/javascript">
            $('#upArrow').on("click", function (e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: '0px'}, 1000);
            });
            
            /**
             * Ativar fancybox
             */
            window.onload = function() {

                $("a.rel", ".thumbnails").fancybox({
                    openEffect : 'elastic',
                    openSpeed  : 150,
                    closeEffect : 'elastic',
                    closeSpeed  : 350, 
                    arrows: true,
                    helpers : {
                        title : {
                            type : 'float'//float, over, outside,inside
                        }}                
                    });
            };
            
            
            
            var loadGaleria = {
                
                init:function (){
                    
                    this.loadAll();
                },
                
                loadAll: function (){
                    
                    $.get("xml/galeria.xml", function (xml){
                        
                        $(xml).find('fotos item').each(function () {
                            var imagem = $(this).find("imagem").text();
                            var descricao = $(this).find("descricao").text();

                            var div = $(".thumbnails");

                            div.append(
                                    "<a class='rel thumbnail' data-fancybox-group='gallery' href='"+imagem+"'>"+
                                        "<img data-src='holder.js/300x200' src='"+imagem+"' alt='' />"+
                                    "</a>"
                                );
                        });
                    }, "xml");
                }
                
            };
            
            //
            // CARREGAR GALERIA
            //
            loadGaleria.init();            
            
        </script>
    </body>

</html>
