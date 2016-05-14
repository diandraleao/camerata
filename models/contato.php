<?php

class Contato{

    public $nm_contato, $ds_email,$ds_mensagem;
    
    public function __construct($nome,$email,$mensagem){
        $this->nm_contato = $nome;
        $this->ds_email = $email;
        $this->ds_mensagem = $mensagem;
    }
    
}
?>