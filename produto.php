<?php

class Produto{
    public $descricao;
    public $estoque;
    public $preco;

    public function AumentarEstoque($num1){
        $this->estoque += $num1;
    }

    public function DiminuirEstoque($num2){
        $this->estoque -= $num2;
    }

    public function ReajustarPreco($num3){
        $this->preco += ($num3*$this->preco)/100;
    }

}
    $produto = new Produto;
    $produto->descricao = "HALTER DE 47 QUILOS ";
    $produto->estoque = 3;
    $produto->preco = 432;

    echo "o ".$produto->descricao."tem ".$produto->estoque." em estoque com o preço unitário de R$ ".$produto->preco;
    
    $Produto = new Produto;
    $Produto->descricao = "HALTER DE 47 QUILOS ";
    $Produto->estoque = 3;
    $Produto->preco = 432;
    echo '<br>';
    echo '<br>';  
    echo " valores iniciais: ";
    echo '<br>'; 
    echo " o estoque do produto é ".$Produto->estoque;
    echo '<br>'; 
    echo " o preço do produto é ".$Produto->preco;
    echo '<br>'; 
    echo '<br>'; 
    echo " valores alterados: ";
    echo '<br>'; 
    $Produto->AumentarEstoque(10);
    echo " o estoque do produto é ".$Produto->estoque;
    echo '<br>'; 
    $Produto->DiminuirEstoque(5); 
    echo " o estoque do produto é ".$Produto->estoque;
    echo '<br>'; 
    $Produto->ReajustarPreco(50);
    echo " o preço do produto reajustado é ".$Produto->preco;




    

    

