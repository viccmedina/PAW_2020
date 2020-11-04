<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Enterprise Name - Turnos</title>
    <meta charset="UTF-8">
    <meta name="description" content="Consulta tus turnos."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="/assets/style/style.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/style/turnos/index.css"/>
  </head>

  <body>
    <header>
      <h1><img src="/assets/imagenes/logo.png" alt="Enterprise Logo" width="50" height="50"> Enterprise Name</h1>
        <?php
        require 'parts/nav.view.php';
        ?>
    </header>

    <main>
      <header>
          <h1> Turnos </h1>
      </header>
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
                <img src="/assets/imagenes/medico.jpg" alt="Foto del médico" width="120" height="100"> 
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
                <img src="/assets/imagenes/medico.jpg" alt="Foto del médico" width="120" height="100"> 
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
        <?php
        require 'parts/footer.view.php';
        ?>
    </footer>
  </body>
</html> 

