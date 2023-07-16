<?php

require 'filtro.php';

$arquivoCursos = fopen('lista.txt', 'r');

stream_filter_register('aquila', MeuFiltro::class);
stream_filter_append($arquivoCursos, 'aquila');

echo fread($arquivoCursos, filesize('lista.txt'));
