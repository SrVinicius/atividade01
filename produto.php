<?php

class Produto{
    public $descricao;
    public $estoque;
    public $preco;

    public function AumentarEstoque(int $num1){
        // condicional utlizada para controlar o limite máximo do estoque. 
        if(($this->estoque+$num1 > 2000)){
            echo ("erro! O valor informado é maior que o necessário no estoque!");
        }else{
            $this->estoque += $num1;
        }
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function DiminuirEstoque($num2){
        // condicional utilizada para não haver diminuição de estoque com valor 0.
        if ($num2 <= 0){
            echo ("Erro! Não é possível diminuir o estoque com a quantia 0 (zero)");
        }
        elseif ($num2 > $this->estoque){
            echo("Erro! Não é possível diminuir o estoque além da quantidade já existente!");
        }else{
            $this->estoque -= $num2;
        }
    }

    public function ReajustarPreco($num3){
        // condicional utilizada para não haver reajuste de preço 0 e maior que 150%
        if($num3 <= 0){
            echo("Erro! Não é possível reajustar o valor(em porcentagem) com 0(zero)!");
        }elseif ($num3 >= 150){
            echo("Erro! Não é possível reajustar o valor em mais de 150% (PERIGO DE LAVAGEM DE DINHEIRO) ");
        }else{
        $this->preco += ($num3*$this->preco)/100;
        }
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


echo $Produto->getProduto();
$Produto->setProduto();

    

    

