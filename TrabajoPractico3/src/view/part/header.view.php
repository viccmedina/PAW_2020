<header>
    <h1><img src="/imagenes/logo.png" alt="Enterprise Logo" width="50" height="50"> Enterprise Name</h1>
        
    <nav id="panel-navegacion">
        <ul>
        <li><a href="/home" title="">Home</a></li>
        <li><a href="/turnos" title="">Turnos</a></li>
        <li><a href="/estudios" title="">Estudios</a></li>
        <li><a href="/obras_sociales" title="">Obras Sociales</a></li>
        <li><a href="/especialidades" title="">Especialidades</a></li>
        <li><a href="/noticias" title="">Noticias</a></li>
        <li><a href="/institucional" title="">Institucional</a></li>
        </ul>
    </nav>
    <?php if (array_key_exists('UserLoggedIn', $_SESSION)){?>
    <a class='logout-button' id='logout-button' href='/logout'>Logout</a>
        <section class='profile-menu'>
            <p>Hola <a href='Profile'> <?= $_SESSION['user']?></a></p>
        </section>
    <?php
    }
    else{
        ?>
        <button class='login-button' onclick="Show('login-modal')">Login</button>
            <section class='login-modal' id='login-modal' ondblclick="Hide('login-modal')">
                <form action='login' method='post'>
                    <input required name='user' type='text' placeholder='Usuario'>
                    <input required name='password' type='password' placeholder='Contraseña'>
                    <button type='success'>Ingresar</button>
                </form>
            </section>
    <?php
    }
    ?>
</header>