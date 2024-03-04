<?php

class Calculadora {
    
    public function soma($a, $b) {
        return $a + $b;
    }

    public function subtracao($a, $b) {
        return $a - $b;
    }

    public function multiplicacao($a, $b) {
        return $a * $b;
    }

    public function radiciacao($a, $raiz) {
        return pow($a, 1 / $raiz);
    }

    public function fatorial($n) {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * $this->fatorial($n - 1);
        }
    }
}

$calculadora = new Calculadora();

echo "Soma: " . $calculadora->soma(5, 3) . "\n";
echo "Subtração: " . $calculadora->subtracao(8, 2) . "\n";
echo "Multiplicação: " . $calculadora->multiplicacao(4, 6) . "\n";
echo "Radiciação: " . $calculadora->radiciacao(16, 2) . "\n";
echo "Fatorial de 5: " . $calculadora->fatorial(5) . "\n";

?>
