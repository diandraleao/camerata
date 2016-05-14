<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('debug');
		debug_all( $this );
		$this->load->view('welcome_message');
	}
	
	public function home(){
	    $this->load->view('home');
	}
	
	public function fotos(){
	    $this->load->view('fotos');
	}
	
	public function contato(){
	    $this->load->view('contato');
	}
	
	public function agenda(){
	    $this->load->view('agenda');
	}
	
	public function produtos(){
	    $this->load->view('produtos');
	}
	
	public function repertorio(){
	    $this->load->view('repertorio');
    }
    
    public function quemsomos(){
	    $this->load->view('quemsomos');
    }
    
    public function videos(){
	    $this->load->view('videos');
    }
    
    public function getmodel(){
    	$this->load->model('model');
		$m = $this->model;
		return $m;
    }
    
    public function doPost(){
		require_once APPPATH."models/contato.php";
		$m = $this->getmodel();
		$m->insertCont(new Contato($_POST['nome'],$_POST['email'],$_POST['mensagem']));
		$this->home();
	}
	
	public function valida(){
    	$email = $_POST["email"];
        $senha = $_POST["senha"];
        $this->load->model("model");
        $usr = $this->model->getUser($email,$senha);
        if($usr !== false){
            if($usr === "admin"){
                $this->session->set_userdata("_ID", "admin"); 
            }
        }else{
            echo "erro";
        }
    }
    
    
    public function buscar(){
    	$palavra = $_POST["campo"];
		$array = array('title' => $palavra,'page1' => $palavra, 'page2' => $palavra);
		$a = $this->db->like($array);
    }
    
    
    
}