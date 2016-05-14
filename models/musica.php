<?php
class Musica{

    public $nm_musica, $cd_lista, $nm_autor;
    
    public function __construct($nm_musica, $cd_lista, $nm_autor){
        $this->nm_musica =$nm_musica;
        $this->cd_lista = $cd_lista;
        $this->nm_autor = $nm_autor;
    }
    
}

?>