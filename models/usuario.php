<?php 
class Usuario{

    public $nm_usuario, $ds_email,$ds_senha;
    
    public function __construct($nm_usuario,$ds_email,$ds_senha){
        $this->nm_usuario = $nm_usuario;
        $this->ds_email = $ds_email;
        $this->ds_senha = $ds_senha;
    }
}