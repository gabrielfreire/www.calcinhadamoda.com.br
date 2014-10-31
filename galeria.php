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
        
            
            <div id="galeria">
                <h2>Minha galeria</h2>
                
                <div>
                    <img src="./images/galeria/galeria_img1.jpg" alt="" />
                    <img src="./images/galeria/galeria_img2.jpg" alt="" />
                    <img src="./images/galeria/galeria_img3.jpg" alt="" />
                    <img src="./images/galeria/galeria_img4.jpg" alt="" />
                    <img src="./images/galeria/galeria_img5.jpg" alt="" />
                    <img src="./images/galeria/galeria_img6.jpg" alt="" />
                    <img src="./images/galeria/galeria_img7.jpg" alt="" />
                    <img src="./images/galeria/galeria_img8.jpg" alt="" />
                    <img src="./images/galeria/galeria_img9.jpg" alt="" />
                    <img src="./images/galeria/galeria_img10.jpg" alt="" />
                    <img src="./images/galeria/galeria_img11.jpg" alt="" />
                    <img src="./images/galeria/galeria_img12.jpg" alt="" />
                </div>            
                
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
