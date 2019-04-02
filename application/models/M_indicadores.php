<?php
class M_indicadores extends CI_Model {


	function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default',TRUE);
		
	}

	public function indicadores($pag=0,$ind=0)
	{	
		$lim_inf = 10;
		$lim_sup = $lim_inf*$pag;
		$this->db->select('ind.id_indicador,ind.nombre_indicador,ind.id_periodicidad,p.id_periodicidad,p.periodicidad,lb.valor,lb.id_unidadmed,um.id_unidadmed,um.unidad,lb.fecha');
		$this->db->from('indicadores ind');
		$this->db->join('linea_base lb','ind.id_indicador = lb.id_indicador','INNER');
		$this->db->join('periodicidad p','ind.id_periodicidad = p.id_periodicidad','INNER');
		$this->db->join('unidad_medida um','lb.id_unidadmed = um.id_unidadmed','INNER');
		$this->db->where('ind.activo',1);
		if($ind>0) $this->db->where('ind.id_indicador',$ind);
		else {
			//if($pag==0) $this->db->limit(10,0);
			$this->db->limit($lim_inf,$lim_sup);
		}

		$query = $this->db->get();
		if($query!=false) return $query->result();
		else return false;
	}

	public function total_ind()
	{
		$this->db->select('ind.id_indicador');
		$this->db->from('indicadores ind');
		$this->db->where('ind.activo',1);
		
		$query = $this->db->get();
		if($query!=false) return $query->num_rows();
		else return false;
	}
}


