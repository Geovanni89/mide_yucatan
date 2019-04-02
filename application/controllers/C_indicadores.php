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
		//json_encode($id)
	}

	public function vista_ind()
	{
		$pagina = $this->input->post('pagina', TRUE);
		$vista = $this->input->post('vista', TRUE);
		$ind = new M_indicadores();
		$datos['ind'] = $ind->indicadores($pagina);

		switch ($vista) {
			case 'lista':
				$this->load->view('vistas_indicadores/listado',$datos);
				break;
			case 'cuadricula':
				$this->load->view('vistas_indicadores/cuadricula',$datos);
				break;
		}
	}

	public function pagina_ind()
	{
		$pagina = $this->input->post('pagina');
		$ind = new M_indicadores();
		$datos['ind'] = $ind->indicadores($pagina);

		$this->load->view('vistas_indicadores/listado',$datos);

	}

	public function paginador()
	{
		$op = $this->input->post('op', TRUE);
		$lim_i = $this->input->post('lim_i', TRUE);
		$lim_s = $this->input->post('lim_s', TRUE);
		$total = $this->input->post('total', TRUE);
		if($op=="sig")
		{
			$lim_i+=1;
			$lim_s+=1;			
		}
		elseif($op=="ant")
		{
			$lim_i-=1;
			$lim_s-=1;			
		}

		if($lim_i == 1) $dis_ant = "disabled";
		else $dis_ant = "";

		//echo 'total: '.$total;
		//echo '<br>limite_superior: '.$lim_s;

		if($lim_i == 0)
			echo '<li class="disabled"><a href="javascript:;">Anterior</a></li>';
		else
			echo '<li><a href="javascript:;" onclick="paginador(\'ant\','.$lim_i.','.$lim_s.','.$total.');">Anterior</a></li>';

		for ($i=$lim_i; $i <=$lim_s; $i++) { 
			echo '<li id="pg_'.$i.'"><a href="javascript:;" onclick="pagina_ind('.$i.');">'.($i+1).'</a></li>';
		}

		if($lim_s == $total)
			echo '<li class="disabled "><a href="javascript:">Siguente</a></li>';
		else
			echo '<li><a href="javascript:;" onclick="paginador(\'sig\','.$lim_i.','.$lim_s.','.$total.');">Siguiente</a></li>';
	}

}