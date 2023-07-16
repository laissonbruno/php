<?php

// echo file_get_contents('zip//lista.zip#lista.txt');

$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]]);
echo file_get_contents('zip//lista2.zip#lista.txt',false, $contexto);
