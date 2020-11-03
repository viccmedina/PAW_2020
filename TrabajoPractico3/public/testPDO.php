<?php
$params = [
    'host' =>'localhost',
    'user' => 'root',
    'pwd' => '',
    'db' => 'paw_2020'
];

try {
    $dsn = sprintf("mysql:host=%s;dbname=%s", $params ['host'],$params['db']);

    $pdo = new PDO($dsn,$params['user'],$params['pwd']);

}catch (PDOException $e){
    echo $e->getMessage();
}catch (Throwable $e){
    echo $e->getMessage();
}

$sentencia = $pdo->query("SELECT * FROM socio");

while ($row = $sentencia->fetch(PDO::FETCH_ASSOC)){
    print_r($row);
}