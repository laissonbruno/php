<?php

class MinhaExcecao extends DomainException
{
    public function exibeLaisson()
    {
        echo "Laisson";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeLaisson();
}
