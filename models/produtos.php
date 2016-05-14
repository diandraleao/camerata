<?php
class Produtos{

    public $nm_produto, $ds_produto, $ds_imagem;
    
    public function __construct($nm_produto, $ds_produto, $ds_imagem){
        $this->nm_produto = $nm_produto;
        $this->ds_produto = $ds_produto;
        $this->ds_imagem = $ds_imagem;
    }
    
}

?>