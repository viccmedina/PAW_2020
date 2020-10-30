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
            <h1>Estudios</h1>
        </header>

        <section>
        <form action="/estudios.view.php" method="get" name="consultaEstudios">

            <label for="buscar">Buscar
                <input type="search" name="buscar" id="buscar"  autofocus placeholder="Ingrese el codigo de seguimiento." required>
            </label>
            <input type="submit" value="Buscar">
            <p>Ingresá los 18 caracteres alfanuméricos de seguimiento , omitiendo puntos y espacios.</p>
        </form>

        <p id="parrafo_section">Resultados de su busqueda:</p>

        <table>
            <!--head de la tabla-->
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Lugar</th>
                    <th scope="col">Historia</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Descargar</th>
                </tr>
            </thead>
            <!-- body de la tabla-->
            <tbody>
                <tr>
                    <td>14/12/2020</td>
                    <td>Laboratorio</td>
                    <td>Realizando analisis</td>
                    <td>En proceso</td>
                    <td></td>
                </tr>
                <tr>
                    <td>14/12/2020</td>
                    <td>Laboratorio</td>
                    <td>Concluido</td>
                    <td>Terminado</td>
                    <td></td>
                </tr>
                <tr>
                    <td>14/12/2020</td>
                    <td>Laboratorio</td>
                    <td>Concluido</td>
                    <td>Terminado</td>
                    <td></td>
                </tr>
            </tbody>
            <!-- estos datos van de ejemplo-->
        </table>

        </section>
    </main>

    <aside>
        <img  src ="/imagenes/publicidad.jpg" alt = "Publicidad">
    </aside>
    </main>
		<?php require "part/footer.view.php"?>
	</body>
</html>