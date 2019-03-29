<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_indicadores extends CI_Controller {	

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');		
		$this->load->model('M_indicadores');
	}

	public function ind()
	{
		$ind = new M_indicadores();
		$id = $this->input->get('id', TRUE);

		$datos['ind'] = $ind->indicadores(0,$id);
		$this->load->view('datos_indicador',$datos);
	}

}