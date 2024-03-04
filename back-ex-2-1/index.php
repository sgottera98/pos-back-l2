<?php

class Cliente {
    private $nome;
    private $endereco;
    private $cep;
    private $cpf;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setCep($cep) {
        if (preg_match('/^\d{5}-\d{3}$/', $cep)) {
            $this->cep = $cep;
        } else {
            echo "Formato de CEP inválido!\n";
        }
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCpf($cpf) {
        if (preg_match('/^\d{3}\.\d{3}\.\d{3}-\d{2}$/', $cpf)) {
            $this->cpf = $cpf;
        } else {
            echo "Formato de CPF inválido!\n";
        }
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function exibirDados() {
        echo "Nome: {$this->getNome()}\n";
        echo "Endereço: {$this->getEndereco()}\n";
        echo "CEP: {$this->getCep()}\n";
        echo "CPF: {$this->getCpf()}\n";
    }
}

$cliente = new Cliente();

$cliente->setNome("Fulano de Tal");
$cliente->setEndereco("Rua Exemplo, 123");
$cliente->setCep("12345-678");
$cliente->setCpf("123.456.789-09");

$cliente->exibirDados();

$cliente = new Cliente();

$cliente->setNome("Fulano de Tal");
$cliente->setEndereco("Rua Exemplo, 123");
$cliente->setCep("1234544da");
$cliente->setCpf("123456.78909");

$cliente->exibirDados();

?>
