<?php

class Produto{
    private $descricao;
    private $estoque;
    private $preco;
 
    function __construct()
    {
        $this->estoque = 0;
    
    }
    public function AumentarEstoque(int $num1){
        // condicional utlizada para controlar o limite máximo do estoque. 
        if(($this->estoque+$num1 > 2000)){
            echo ("erro! O valor informado é maior que o necessário no estoque! ");
        }else{
            $this->estoque += $num1;
        }
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($desc){
        $this->descricao = $desc;
    }
    
    public function getEstoque(){
        return $this->estoque;
    }

    public function setEstoque($est){
        $this->estoque = $est;
    }

    public function getPreco(){
        return $this->preco;
    }
    
    public function setPreco($pr){
        $this->preco = $pr;
    }

    public function DiminuirEstoque($num2){
        // condicional utilizada para não haver diminuição de estoque com valor 0.
        if ($num2 <= 0){
            echo ("Erro! Não é possível diminuir o estoque com a quantia 0 (zero) ");
        }
        elseif ($num2 > $this->estoque){
            echo("Erro! Não é possível diminuir o estoque além da quantidade já existente! ");
        }else{
            $this->estoque -= $num2;
        }
    }

    public function ReajustarPreco($num3){
        // condicional utilizada para não haver reajuste de preço 0 e maior que 150%
        if($num3 <= 0){
            echo("Erro! Não é possível reajustar o valor(em porcentagem) com 0(zero)! ");
        }elseif ($num3 >= 150){
            echo("Erro! Não é possível reajustar o valor em mais de 150% (PERIGO DE LAVAGEM DE DINHEIRO) ");
        }else{
        $this->preco += ($num3*$this->preco)/100;
        }
    }

}   

    
    $cadastro = new Produto();
    $cadastro->setDescricao("HALTER DE 47 QUILOS");
    echo " valores alterados: ";
    echo "<br>";
    $cadastro->AumentarEstoque(10);
    echo "Estoque: ".$cadastro->getEstoque();
    echo "<br>";
    $cadastro->DiminuirEstoque(5);
    echo "Estoque: ".$cadastro->getEstoque();
    echo "<br>";
    $cadastro->setPreco(100);
    $cadastro->ReajustarPreco(50);
    echo "Preço reajustado: ".$cadastro->getPreco();

    
    






    

    

