<?php

// sem loop
echo "1" .PHP_EOL;
echo "2" .PHP_EOL;
echo "3" .PHP_EOL;


// criando o loop
$contador = 1;

// while

while ($contador <= 15) {
    echo "$contador" .PHP_EOL;
    $contador = $contador + 1;
}



// for

for ($contador = 1; $contador <= 15; $contador ++){
    echo "#$contador" .PHP_EOL;
}

// break e continue

for ($contador =1; $contador <= 15; $contador ++) {
    if ($contador != 13 ) {
        echo "#$contador" .PHP_EOL;
    }
}

for ($contador =1; $contador <= 15; $contador ++) {
    if ($contador == 13 ) {
        continue;
    }
    echo "#$contador" .PHP_EOL;
}

for ($contador =1; $contador <= 15; $contador ++) {
    if ($contador == 13 ) {
        break;
    }
    echo "#$contador" .PHP_EOL;
}