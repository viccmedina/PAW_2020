<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require 'parts/head.view.php'?>
    <link rel="stylesheet" type="text/css" href="/assets/style/obras_sociales/obras_sociales.css"/>
  </head>

  <body>
    <header>
      <h1><img src="/assets/imagenes/logo.png" alt="Enterprise Logo" width="50" height="50">Enterprise Name</h1>
        <?php
        require 'parts/nav.view.php';
        ?>
    </header>

    <main>
      <header>
          <h1> Obras Sociales </h1>
      </header>

      <form action="/obras_sociales.html" method="get" name="FormularioObrasSociales" rel="search">
        <fieldset>
          <legend>Obra Social</legend>
          <label for="obra_social">Indique su obra social:</label>
          <input list="obras_sociales" name="obra_social" id="obra_social" autocomplete="off" autofocus required>
        </fieldset>
        <fieldset>
          <legend>Especialidad</legend>
          <label for="especialidad">Indique la especialidad que esta buscando:</label>
          <input list="especialidades" name="especialidad" id="especialidad" autocomplete="off">
        </fieldset>
        <input type="submit" value="Buscar">
      </form>

      <datalist id="obras_sociales">
        <option value="Osde">
        <option value="Arcor Salud">
        <option value="Medife">
        <option value="Dasmi">
        <option value="Swiss medical">
      </datalist>

      <datalist id="especialidades">
        <option value="Pediatría">
        <option value="Dermatología">
        <option value="Oftalmología">
        <option value="Otorrinolaringología">
        <option value="Traumatología">
      </datalist>

      <h1> Areas cubiertas por su obra social </h1>
      <ul>
        <li>
          <article>
            <h2>Nombre especialidad</h2>
            <p>Descripción detallada</p>
          </article>
          <article>
            <h2>Nombre especialidad</h2>
            <p>Descripción detallada</p>
          </article>
    
        </li>
      </ul>

      <aside>
        <img  src ="/assets/imagenes/publicidad.jpg" alt = "Publicidad">
      </aside>
    </main>

    <footer>
        <?php
        require 'parts/footer.view.php';
        ?>

    </footer>
  </body>
</html> 