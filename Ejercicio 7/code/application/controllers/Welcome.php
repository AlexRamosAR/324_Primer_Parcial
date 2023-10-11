<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('estudiante');

	}
	public function index() {
	    $query = $this->db->query('SELECT * FROM estudiante');
	    $data['estudiante'] = $query->result(); // Obtener resultados
	    $this->load->view('actualizar', $data); // Cargar la vista
	}
	public function agregar(){
		$estudi['nombre'] = $this->input->post('nombre');
		$estudi['ci'] = $this->input->post('ci');
		$estudi['departamento'] = $this->input->post('departamento');
		$estudi['nota'] = rand(1,100);
		$estudi['fec_nac'] = $this->input->post('fec_nac');
		$estudi['sexo'] = $this->input->post('sexo');
		
		$this->estudiante->agregar($estudi);
		redirect('welcome');

	}
	public function eliminar($id_persona){
		echo "entro";
		$this->estudiante->eliminar($id_persona);
		redirect('welcome');
	}

	public function actualizar($id_persona){
		$estudi['nombre'] = $this->input->post('nombre');
		$estudi['ci'] = $this->input->post('ci');
		$estudi['departamento'] = $this->input->post('departamento');
		$estudi['nota'] = rand(1,100);
		$estudi['fec_nac'] = $this->input->post('fec_nac');
		$estudi['sexo'] = $this->input->post('sexo');

	    $this->estudiante->modificar($estudi, $id_persona);
		redirect('welcome');
	}
	public function editar(){

	}
}

