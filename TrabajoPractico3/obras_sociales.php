<?php
session_start();
require __DIR__.'/vendor/autoload.php';
use PAW\app\ViewController\Import;
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

Import::Header('index/index.css');

?>

    <main>
      <header>
          <h1> Obras Sociales </h1>
      </header>

      <form action="/obras_sociales.php" method="get" name="FormularioObrasSociales" rel="search">
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
        <img  src ="/imagenes/publicidad.jpg" alt = "Publicidad">
      </aside>
    </main>

<?php
	Import::Footer();
?>