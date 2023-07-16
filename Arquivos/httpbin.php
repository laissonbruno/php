<?php 


// $contexto = stream_context_create([
//     'http' => [
//         'method' => 'DELETE',
//         'header' => 'X-From: PHP'
//     ]]);
$contexto = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-Type: text/plain",
        'content' => 'Teste'
    ]]);
// echo file_get_contents('http://httpbin.org/get');
// echo file_get_contents('http://httpbin.org/delete', false, $contexto);
echo file_get_contents('http://httpbin.org/post', false, $contexto);


