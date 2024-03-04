<?php
    class Primos {
        private $num1;
        private $num2;
        
        public function setNum1($num1) {
            $this->num1 = $num1;
        }
        
        public function getNum1() {
            return $this->num1;
        }
        
        public function setNum2($num2) {
            $this->num2 = $num2;
        }
        
        public function getNum2() {
            return $this->num2;
        }
        
        public function contaPrimos() {
            if ($this->getNum1() > $this->getNum2()) {
                echo "Segundo numero e maior que o primeiro, tente novamente.";
            } else {
                $contador = 0;
                for ($i = $this->getNum1(); $i <= $this->getNum2(); $i++) {
                    $eprimo = 1;
                    
                    if ($i < 2) {
                        $eprimo = 0;
                    }
                    
                    for ($j = 2; $j < $i; $j++) {
                        if ($i % $j == 0) {
                            $eprimo = 0;
                        }                        
                    }
                    
                    $contador += $eprimo;
                }
            }
            echo "primos: {$contador}";
        }     
    }
    
    $primos = new Primos();
    
    $primos->setNum1(1);
    $primos->setNum2(20);
    
    $primos->contaPrimos();
?>
