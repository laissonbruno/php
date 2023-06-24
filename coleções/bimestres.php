<?php 


$notasBimestre1 = [
    [
    'aluno' => 'Maria',
    'nota' => 9
    ],
    [
    'aluno' => 'Nicolas',
    'nota' => 5
    ],
    [
    'aluno' => 'Tabata',
    'nota' => 10
    ]
];


$notasBimestre2 = [
    [
    'aluno' => 'Maria',
    'nota' => 9
    ],
    [
    'aluno' => 'Nicolas',
    'nota' => 5
    ]
];


// diferença de arrays

array_diff($notasBimestre1, $notasBimestre2);
array_diff_key($notasBimestre1, $notasBimestre2);
array_diff_assoc($notasBimestre1, $notasBimestre2);
array_keys(array_diff_key($notasBimestre1, $notasBimestre2));
array_values(array_diff_key($notasBimestre1, $notasBimestre2));