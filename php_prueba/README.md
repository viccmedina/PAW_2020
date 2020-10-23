# PHP - Primeros Pasos

En base al siguiente video: [Semana 4 - Programación en Backend](https://www.youtube.com/watch?v=I6MfvyRmCcE&feature=emb_logo&ab_channel=TomasDelvechio)

Vamos a ir siguiendo los pasos y dejando algunas anotaciones para que en el futuro, sea más
sencillo avanzar con el proyecto.

## Setup

### Verificamos si tenemos php instalado:
``` bash
php --version

PHP 7.2.24-0ubuntu0.18.04.7 (cli) (built: Oct  7 2020 15:24:25) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.2.24-0ubuntu0.18.04.7, Copyright (c) 1999-2018, by Zend Technologies
```

Si tenemos una salida como la anterior, significa que tenemos PHP instalado.
Caso contrario ejecutamos:
``` bash
sudo apt install php7.2-cli
```

### Verificamos si tenemos composer instalado:
``` bash
composer --version
Composer 1.6.3 2018-01-31 16:28:17
```

Nuevamente, si tenemos una salida como la anterior significa que tenemos instalada la librería.
Caso contrario, ejecutamos:

``` bash
sudo apt install composer
```

### Levantamos un servidor local

Para servir el sitio de ejemplo, debemos contar con un servidor.
Para esto ejecutamos el siguiente comando en la raíz de nuestro directorio de ejemplo:

``` bash
php -S localhost:9090 -t public/
```

Con el parámetro `-t ` le indicamos la raíz del repositorio.

Si todo salio bien, debemos contar con una salida como la siguiente:
``` bash
PHP 7.2.24-0ubuntu0.18.04.7 Development Server started at Wed Oct 21 20:47:48 2020
Listening on http://localhost:9090
```

Si tenemos problemas con el número de puerto, ya que el 9090 puede estar ocupado por otra aplicación, basta con elegir otro. Por ejemplo el 8989.

## Ejemplo para debug

Si queremos ver el contenido de una variable nos basta con poner las siguientes línas de código:

``` php
echp "<pre>";
var_dump($my_vay);
die;
```

Para el caso de las peticiones hacia el servidor, podemos analzar la variable `_SERVER`.

Para obtener específicamente la petición junto con la URI debemos tener en cuenta la variable `$_SERVER['REQUEST_URI']`

## Composer

El archivo `composer.json` debe estar ubicado en la raíz del proyecto. En el mismo debemos definir
quienes son los participantes del grupo junto con sus roles y sobre todo, podemos especificar
los paquetes o librerías de PHP que vamos a necesitar. Luego, estos requerimientos especificados 
(es fundamental indicar la versión) serán instalados.

Ejecutamos en la terminal el siguiente comando: 

``` bash
composer update
```

El cual, en la primera vez nos va a generar dos cosas:
- Una carpeta `vendor`, donde se especifica el código de las librerias instaladas.
- Un archivo llamado `composer.lock`, donde se especifica las librerias instaladas.