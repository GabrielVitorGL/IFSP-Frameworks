<?php
    class Dados {
        public $produto;
        public $fabricante;

        public function __construct(){
            echo "<h1>PHP OO</h1>";
        }

        public function Compra(){
            echo $this->produto = "Mouse";

        }

        public function Venda($prod, $fab){
            echo "<h1>Metodo de Retorno</h1>";

            echo "Produto " . $this->produto = $prod . "<br/>";
            echo "Fabricante " . $this->fabricante = $fab;
            return;
        }
    }
?>