<?php

class Calculadora {
    public function calcular() {
        $numArgs = func_num_args();
        $args = func_get_args();

        if ($numArgs === 1 && is_double($args[0])) {
            return "Área do círculo {$this->areaCirculo($args[0])}";
        } elseif ($numArgs === 2 && is_double($args[0]) && is_double($args[1])) {
            return "Área do quadrado {$this->areaQuadrado($args[0], $args[1])}";
        } elseif ($numArgs === 3 && is_int($args[0]) && is_int($args[1]) && is_int($args[2])) {
            return "Perímetro do triângulo {$this->perimetroTriangulo($args[0], $args[1], $args[2])}";
        } elseif ($numArgs === 2 && is_int($args[0]) && is_double($args[1])) {
            return "Área do triângulo com um lado inteiro e um lado decimal {$this->areaTrianguloLadoDecimal($args[0], $args[1])}";
        } elseif ($numArgs === 3 && is_array($args[0]) && is_array($args[1]) && is_array($args[2])) {
            return "Área do triângulo com coordenadas cartesianas {$this->areaTrianguloCoordenadas($args[0], $args[1], $args[2])}";
        } else {
            return "Uso incorreto";
        }
    }

    private function areaCirculo($raio) {
        return pi() * $raio * $raio;
    }

    private function areaQuadrado($lado1, $lado2) {
        return $lado1 * $lado2;
    }

    private function perimetroTriangulo($lado1, $lado2, $lado3) {
        return $lado1 + $lado2 + $lado3;
    }

    private function areaTrianguloLadoDecimal($ladoInteiro, $ladoDecimal) {
        return 0.5 * $ladoInteiro * $ladoDecimal;
    }
    
    private function areaTrianguloCoordenadas($ponto1, $ponto2, $ponto3) {
        $x1 = $ponto1[0];
        $y1 = $ponto1[1];
        $x2 = $ponto2[0];
        $y2 = $ponto2[1];
        $x3 = $ponto3[0];
        $y3 = $ponto3[1];

        $areaCalculada = 0.5 * abs(
            ($x1 * ($y2 - $y3)) +
            ($x2 * ($y3 - $y1)) +
            ($x3 * ($y1 - $y2))
        );

        return $areaCalculada;
    }
}

$calculadora = new Calculadora();

echo $calculadora->calcular(5.0);
echo $calculadora->calcular(4.0, 6.0);
echo $calculadora->calcular(3, 4, 5);
echo $calculadora->calcular(4, 7.5);
echo $calculadora->calcular([0,0], [0,3], [4,0]);
echo $calculadora->calcular("Texto");

?>
