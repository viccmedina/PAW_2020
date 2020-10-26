<?php

namespace PAW\app\ViewController;

class Import {
    public static function Header($rutaCSS){
        $header = '<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset = " UTF-8 " >
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="/style/style.css"/>';
        if ($rutaCSS) {
            $header .= '    <link rel="stylesheet" type="text/css" href="/style/' . $rutaCSS . '"/>';
        }
        $header .= '    <title>Enterprise Name - Home</title>
        </head>
        <body>
            <header>
                <h1><img src="/imagenes/logo.png" alt="Enterprise Logo" width="50" height="50"> Enterprise Name</h1>
                <nav id="panel-navegacion">
                    <ul>
                    <li><a href="/home.php" title="">Home</a></li>
                    <li><a href="/turnos.php" title="">Turnos</a></li>
                    <li><a href="/estudios.php" title="">Estudios</a></li>
                    <li><a href="/obras_sociales.php" title="">Obras Sociales</a></li>
                    <li><a href="/especialidades.php" title="">Especialidades</a></li>
                    <li><a href="/noticias.php" title="">Noticias</a></li>
                    <li><a href="/institucional.php" title="">Institucional
                    </a></li>
                    </ul>
                </nav>
            <header>';

        echo $header;
    }
    public static function Footer(){
        echo '
            <footer>
                <address>
                    <P>Tel : XXX-XXX-XXX </P>
                    <P>Email : <a href="mailto:webmaster@example.com">webmaster@example.com</a>.</P>
                    <P>Calle no se me ocurre al 1983, Luján</P>
                </address>
                <ul>
                    <li><a href="https://www.instagram.com">Instagram</a></li>
                    <li><a href="https://www.facebook.com">Facebook</a></li>
                    <li><a href="https://www.whatsapp.com">Whatsapp</a></li>
                </ul>
            </footer>	
        </body>
        </html>';
    }
  }

?>