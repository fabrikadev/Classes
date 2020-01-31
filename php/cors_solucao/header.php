<?php

// Si você tiver problemas com CORS no console usar alguma destas técnicas pode te ajudar
// O melhor é identificar a CDN ou de onde vem o erro CORS e arrumar
// As opções abaixo são somente gambiarras

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
//https://desarrolloweb.com/articulos/solucion-problemas-api-php-cors-post.html
//
?>
