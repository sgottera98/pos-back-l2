<?php

class ValidadorCPF {

    private $cpf;

    public function __construct($cpf) {
        $this->setCPF($cpf);
    }

    public function setCPF($cpf) {
        // Remove caracteres não numéricos
        $this->cpf = preg_replace('/[^0-9]/', '', $cpf);
    }

    public function getCPF() {
        return $this->cpf;
    }

    public function validarCPF() {
        if (strlen($this->cpf) != 11 || preg_match('/^(\d)\1+$/', $this->cpf)) {
            return false;
        }

        $soma = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma += $this->cpf[$i] * (10 - $i);
        }

        $resto = $soma % 11;
        $digitoVerificador1 = ($resto < 2) ? 0 : 11 - $resto;

        $soma = 0;
        for ($i = 0; $i < 10; $i++) {
            $soma += $this->cpf[$i] * (11 - $i);
        }

        $resto = $soma % 11;
        $digitoVerificador2 = ($resto < 2) ? 0 : 11 - $resto;

        return ($this->cpf[9] == $digitoVerificador1 && $this->cpf[10] == $digitoVerificador2);
    }
}

// Exemplo de uso
$cpf = new ValidadorCPF("123.456.789-09");

if ($cpf->validarCPF()) {
    echo "CPF válido.\n";
} else {
    echo "CPF inválido.\n";
}

$cpf = new ValidadorCPF("123.433.789-09");

if ($cpf->validarCPF()) {
    echo "CPF válido.\n";
} else {
    echo "CPF inválido.\n";
}

?>
