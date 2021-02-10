<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LoginLogoffMulticapaPOO</title>
        <meta name="viewport"   content="width=device-width, initial-scale=1.0">
        <meta name="author"     content="Nerea Álvarez Justel">
        <meta name="robots"     content="index, follow">      
        <link rel="stylesheet"  href="webroot/css/estilos.css"       type="text/css" >
        <link rel="icon"        href="webroot/media/favicon.png"    type="image/x-png">
        
        <script src="webroot/javascript/script.js"   type="text/javascript"></script>
        <style>
            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              padding-top: 100px; /* Location of the box */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
              background-color: #fefefe;
              margin: auto;
              padding: 20px;
              border: 1px solid #888;
              width: 80%;
            }

            /* The Close Button */
            .close {
              color: #aaaaaa;
              float: right;
              font-size: 28px;
              font-weight: bold;
            }

            .close:hover,
            .close:focus {
              color: #000;
              text-decoration: none;
              cursor: pointer;
            }
        </style>
    </head>
    <body>
        <header id="header" class="logo">
            <a href="https://www.instagram.com/designs_naj/" target="_blank"><img src="webroot/media/images/logo2.png" alt="Logo" width="300" class="icono_logo"/></a>
        </header>

        <?php require_once $vistaEnCurso ?>

        <footer class="fixed">
            
            
            <div id="footerIzq">
                <p>  <a href="../../../../index.html">&copy; 2020-2021 Nerea Álvarez Justel</a> </p>
                
            </div>
    
            <div id="footerDec">
                <a href="doc/tema2.pdf" target="_blank"><img class="icon" width="20" src="webroot/media/images/tema2.png" ></a>
                <a href="webroot/rss/rss.xml" target="_blank"><img class="icon" width="25" src="webroot/media/images/rss.png" ></a>
                <a href="https://github.com/N18AJ/App_2021" target="_blank"><img class="icon" width="25" src="webroot/media/images/github.png" ></a>
                <a href="http://daw212.ieslossauces.es/" target="_blank"> <img class="icon" src="webroot/media/images/one.png" alt="oneandone icon" width="30"></a>
                <a href="doc/cv.pdf" target="_blank"> <img src="webroot/media/images/cv.png" alt="Curriculum Vitae" width="20"></a>
                <a href="doc/phpDoc/index.html" target="_blank"> <img class="icon" src="webroot/media/images/phpDoc.png" alt="phpDoc" width="25"></a>
                <a href="https://www.zara.com" target="_blank"><img class="icon" width="50" src="webroot/media/images/zara.png" ></a>
            </div>
        </footer>
    </body>
</html>