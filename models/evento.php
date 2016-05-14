<?php

class Evento{

    public $nm_evento, $ds_evento,$dt_evento,$ds_local;
    
    public function __construct($nm_evento, $ds_evento,$dt_evento,$ds_local){
        $this->nm_evento = $nm_evento;
        $this->ds_evento = $ds_evento;
        $this->dt_evento = $dt_evento;
        $this->ds_local = $ds_local;
    }
    
}
?>