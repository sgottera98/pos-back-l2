<?php

class CalculadoraDiferencaDatas {

    public function calcularDiferencaEmDias($data1, $data2) {
        $data1 = new DateTime($data1);
        $data2 = new DateTime($data2);

        $diferenca = $data1->diff($data2);

        return $diferenca->days;
    }
}

// Exemplo de uso
$calculadoraDatas = new CalculadoraDiferencaDatas();

$data1 = "2022-01-01";
$data2 = "2022-02-15";

$diferencaEmDias = $calculadoraDatas->calcularDiferencaEmDias($data1, $data2);

echo "Diferença em dias entre $data1 e $data2: $diferencaEmDias dias\n";
?>
