<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Enterprise Name - Turnos</title>
    <meta charset="UTF-8">
    <meta name="description" content="Consulta tus turnos."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="/style/style.css"/>
    <link rel="stylesheet" type="text/css" href="/style/turnos/turnos.css"/>
  </head>

  <body>
    <header>
      <h1><img src="/imagenes/logo.png" alt="Enterprise Logo" width="50" height="50">
        <?=
          $titulo
        ?>   
      </h1>
      <?php 
			require 'parts/nav-view.php';
		?>
    <?php if ($procesado) : ?>
      <div class= "notification ">
        Su peticion fue procesada con exito. <br>
        Nos pondremos en contacto con usted a la brevedad.
      </div>
    <?php endif; ?>
    </header>

    <main>
      <header>
          <h1> <?= $nav ?> </h1>
      </header>

      <form action = "/turnos" method="POST"> 
        <label for = "subject"> <strong> Asunto (*) </strong></label>
        <input type="text" name ="subject">
        <label for = "email"> <strong> Correo (*) </strong></label>
        <input type="email" name= "email">
        <label for = "description"> <strong> Description (*) </strong></label>
        <textarea name= "description" cols="30" rows="10"> </textarea>
        <input type="submit" name="submit" value="Enviar">
      </form>

      <section>
        <header>
          <button type="button">Fecha</button> 
          <button type="button">Médico</button> 
          <button type="button">Etc</button> 
          <h2><a href="/nuevo_turno.html" title="">Nuevo Turno</a></h2>
        </header>
        <ol>  
          <li>
            <details>
              <summary>
                <strong><time datetime="2008-02-14 20:00">Fecha Turno</time></strong>
                Nombre médico
              </summary>
              <div>
                <p>Nombre médico</p>
                <time datetime="2008-02-14 20:00">Fecha Turno</time>
                <img src="/imagenes/medico.jpg" alt="Foto del médico" width="120" height="100"> 
                <p>Numero consultorio</p>
                <p>Preparaciónes previas</p>
                <ul>
                  <li>Ayuno</li>
                  <li>Carnet Obra Social</li>
                </ul>

                <p>Recordatorios</p>
                <ul>
                  <li>Traer barbijo y alcohol</li>
                </ul>
              </div>
            </details>
          </li>

          <li>
            <details>
              <summary>
                <strong><time datetime="2008-02-14 20:00">Fecha Turno</time></strong>
                Nombre médico
              </summary>
              <div>
                <p>Nombre médico</p>
                <time datetime="2008-02-14 20:00">Fecha Turno</time>
                <img src="/imagenes/medico.jpg" alt="Foto del médico" width="120" height="100"> 
                <p>Numero consultorio</p>
                <p>Preparaciónes previas</p>
                <ul>
                  <li>Ayuno</li>
                  <li>Carnet Obra Social</li>
                </ul>

                <p>Recordatorios</p>
                <ul>
                  <li>Traer barbijo y alcohol</li>
                </ul>
              </div>
            </details>
          </li>
        </ol>
      </section>
    </main>

    <footer>
      <address>
        <p>Tel : XXX-XXX-XXX</p>
        <p>Email : <a href="mailto:webmaster@example.com">webmaster@example.com</a></p>
        <p>Calle no se me ocurre al 1983, Luján</p>
      </address> 

      <ul>
        <li><a href="https://www.instagram.com">Instagram</a></li>
        <li><a href="https://www.facebook.com">Facebook</a></li>
        <li><a href="https://www.whatsapp.com">Whatsapp</a></li>
      </ul>
    </footer>
  </body>
</html> 

