<?php

namespace PAW\app\ViewController;

class Import {
    public static function Header($rutaCSS){
        $header = '<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset = " UTF-8 " >
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="/style/style.css"/>
            <script src="/js/main.js"></script>';
        if ($rutaCSS) {
            $header .= '    <link rel="stylesheet" type="text/css" href="/style/' . $rutaCSS . '"/>';
        }
        if (array_key_exists('UserLoggedIn', $_SESSION)){
            $header .= "<a class='logout-button' id='logout-button' href='Logout.php'>Logout</a>
                <section class='profile-menu'>
                    <p>Hola <a href='Profile.php'>" . $_SESSION['user'] ."</a></p>
                </section>
            ";
        }
        else{
            $header .= "<button class='login-button' onclick=\"Show('login-modal')\">Login</button>
                <section class='login-modal' id='login-modal' ondblclick=\"Hide('login-modal')\">
                    <form action='login.php' method='post'>
                        <input required name='user' type='text' placeholder='Usuario'>
                        <input required name='password' type='password' placeholder='Contraseña'>
                        <button type='success'>Ingresar</button>
                    </form>
                </section>
            ";
        }
        $header .= '    <title>Enterprise Name - Home</title>
        </head>
        <body>
            <header>
                <h1><img src="/imagenes/logo.png" alt="Enterprise Logo" width="50" height="50"> Enterprise Name</h1>';
        
        $header .= '        <nav id="panel-navegacion">
                    <ul>
                    <li><a href="/home.php" title="">Home</a></li>
                    <li><a href="/turnos.php" title="">Turnos</a></li>
                    <li><a href="/estudios.php" title="">Estudios</a></li>
                    <li><a href="/obras_sociales.php" title="">Obras Sociales</a></li>
                    <li><a href="/especialidades.php" title="">Especialidades</a></li>
                    <li><a href="/noticias.php" title="">Noticias</a></li>
                    <li><a href="/institucional.php" title="">Institucional</a></li>
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