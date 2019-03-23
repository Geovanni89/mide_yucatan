<?php
class M_json extends CI_Model {


	function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default',TRUE);
		
	}

	public function ejes()
	{	
		$this->db->select('e.id_eje,e.descripcion');
		$this->db->from('cat_ejes e');
		$this->db->where('e.activo',1);
		
		$query = $this->db->get();
		if($query!=false) return $query->result();
		else return false;
		
	}

	

	public function politicas($id_eje)
	{
		$this->db->select('p.id_politica,p.descripcion');
		$this->db->from('politica_publica p');
		$this->db->where('p.id_eje',$id_eje);
		$this->db->where('p.activo',1);
		
		$query = $this->db->get();
		if($query!=false) return $query->result();
		else return false;
	}

	public function objetivos($id_obj)
	{
		$this->db->select('o.id_objetivo,o.descripcion');
		$this->db->from('cat_objetivos o');
		$this->db->where('o.id_politica',$id_obj);
		$this->db->where('o.activo',1);

		$query = $this->db->get();
		if($query!=false) return $query->result();
		else return false;
	}

	
	public function indicadores($id_obj)
	{
		$this->db->select('i.id_indicador,i.nombre_indicador,i.pdf');
		$this->db->from('indicadores i');
		$this->db->where('i.id_objetivo',$id_obj);
		$this->db->where('i.activo',1);

		$query = $this->db->get();
		if($query!=false) return $query->result();
		else return false;
	}
}


