<?php
class Model extends CI_Model{
    
    public function insertCont (Contato $cont){
        $this->db->insert('Contato',$cont);
    }
    
    public function insertProd (Produto $prod){
        $this->db->insert('Produtos',$prod);
    }
    
    public function insertEvent (Evento $even){
        $this->db->insert('Evento',$even);
    }
    
    public function insertMusic (Musica $mus){
        $this->db->insert('Musicas',$mus);
    }
    
    
    //Session
    
    public function getUser($email,$senha) {
        $this->db->where("ds_email",$email);
        $this->db->where("ds_senha",$senha);
        $a=$this->db->get('Usuario');
        if ($a->num_rows()>0){
            if($a->row()->ds_email === "andressamiki@gmail.com"){
                return "admin";
            }
        }else{
            return false;
        }
    }
    
}