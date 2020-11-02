

* git clone https://github.com/viccmedina/PAW_2020.git

* cd al proyecto- en este caso a PAW_2020/tp3 // posicionamos en el directorio de work

* composer install // para instalar composer 

* cp .env.example al archivo .env q debemos crear con los "valores" deseados 

* phinx migrate -e development // para crear las tablas en la db

* Ejecutar php -S localhost:9999 -t public/   // levantamos el servidor en el port 9999
