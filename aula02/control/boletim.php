<?php
    class Boletim {
        public $media;

        public function __construct(){
            echo "<h1>PHP OO - Boletim Escolar</h1>";
        }

        public function CalcularMedia($nome, $n1, $n2, $n3){
            $this->media = ($n1 + $n2 + $n3) / 3;

            echo "<h2>Aluno: " . $nome . "</h2>";

            echo "Média: " . $this->media . "<br/>";
            echo "Aluno ";
            if ($this->media >= 7.0) echo "APROVADO";
            else echo "REPROVADO";
            return media;
        }
    }
?>