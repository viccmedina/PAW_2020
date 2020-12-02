# Proyecto PAW

La idea de el proyecto es pasar de STATIC a DINAMIC.

## Instalación y Ejecución (local)

* git clone https://github.com/viccmedina/PAW_2020.git
* cd TrabajoPractico3
* composer install
* cp .env.example .env 
* Editar el .env con los valores deseados.
* Ejecutar migrations: phinx migrate -e development  para obtener las migratinos
* Ejecutar php -S localhost:8000 -t public para levantar el proyecto