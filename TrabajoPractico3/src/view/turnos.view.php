<!DOCTYPE html>
<html lang="es">
	<head>
		<?php require "part/head.view.php"?>
		<link rel="stylesheet" type="text/css" href="style/index/index.css"/>
	<head>
	<body>
			<?php require "part/header.view.php"?>
			<aside>
				<a href="#"><img src="" alt="Información COVID-19"></a>	
			</aside>

		<main>
      <header>
          <h1> Turnos </h1>
      </header>
      <section>
        <header>
          <button type="button">Fecha</button> 
          <button type="button">Médico</button> 
          <button type="button">Etc</button> 
          <h2><a href="/nuevo_turno.view.php" title="">Nuevo Turno</a></h2>
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
		<?php require "part/footer.view.php"?>
	</body>
</html>
