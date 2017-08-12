<?php
    class Celular {
        public $nome;
        public $marca;
        public $tamTela;
        public $memROM;
        public $memRAM;
        public $preco;
        
        function Celular($nome, $marca, $tamTela, $memROM, $memRAM, $preco){
            $this->nome = $nome;
            $this->marca = $marca;
            $this->tamTela = $tamTela;
            $this->memROM = $memROM;
            $this->memRAM = $memRAM;
            $this->preco = $preco;
        }
        
        
    
    
        function imprimeValores(){
            echo $this->nome . "\n";
            echo $this->marca . "\n";
            echo $this->tamTela . "\n";
            echo $this->memROM . "\n";
            echo $this->memRAM . "\n";
            echo $this->preco . "\n";
            echo "<br>";
        }

    }
    $iPhone6 = new Celular('iPhone', 'Apple', '6', '32', '3', 3000);
    $samsung = new Celular('Galaxy S', 'Samsung', '5.5', '64', '4', 4000);
    $moto= new Celular('MotoX', 'Motorola', '5.2', '64', '4', 2000);
    
    $iPhone6 -> imprimeValores();
    $samsung-> imprimeValores();
    $moto -> imprimeValores();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

