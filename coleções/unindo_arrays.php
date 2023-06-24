<?php 


$alunos2021 = [
    [
    'Maria'    
    ],
    [
    'Nicolas'    
    ],
    [
    'Tabata'
    ]
];

$novosAlunos= [
    [
    'Maria 2'    
    ],
    [
    'Nicolas 2'    
    ],
    [
    'Tabata 2'
    ]
];

// $alunos2022 = array_merge($alunos2021, $novosAlunos);
// $alunos2022 = $alunos2021 + $novosAlunos;

// desempacotar o array
$alunos2022 = [...$alunos2021, ...$novosAlunos];

