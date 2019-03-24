<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitio extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');		
		$this->load->model('M_json');
	}

	public function index()
	{
		$json = new M_json();
		$ejes = $json->ejes();
		$datos_json = array();
		$count_eje = 0;

		foreach ($ejes as $veje) {
				$count_politica = 0;		
				$politicas = $json->politicas($veje->id_eje);
				$datos_json[] = array('id'=>$veje->id_eje, 'nombre'=>$veje->descripcion, 'numeroTemas'=>count($politicas));
				

				foreach ($politicas as $vpol) {
					$count_obj = 0;
					$objetivos = $json->objetivos($vpol->id_politica);
					$datos_json[$count_eje]['temas'][] = array('id'=>$vpol->id_politica , 'nombre'=>$vpol->descripcion , 'numeroObjetivos'=>count($objetivos));

					foreach ($objetivos as $vobj) {
						$indicadores = $json->indicadores($vobj->id_objetivo);
						$datos_json[$count_eje]['temas'][$count_politica]['objetivos'][] = array('id'=>$vobj->id_objetivo , 'nombre'=>$vobj->descripcion ,'numeroIndicadores'=>count($indicadores)); //
						foreach ($indicadores as $vind) {
							$datos_json[$count_eje]['temas'][$count_politica]['objetivos'][$count_obj]['indicadores'][] = array('id' => $vind->id_indicador, 'nombre' => $vind->nombre_indicador, 'nombrePDF' =>  $vind->pdf,); //['id'] = $vind->id_indicador;
						}
						$count_obj++;

						
					}
					$count_politica++;

				}
				$count_eje++;

			}

		$datos['datos_json'] = json_encode($datos_json, JSON_UNESCAPED_UNICODE);
		//$datos['datos_json'] = $datos_json;
 		$this->load->view('index',$datos);
	}

	public function documentos()
	{
		$this->load->view('doc_ped');
	}

	public function indicador_nacional()
	{
		$this->load->view('ind_nacional');
	}

	public function registro()
	{
		$this->load->view('registro');
	}

	public function contacto()
	{
		$this->load->view('contacto');
	}

	public function lista_indicadores()
	{
		$this->load->view('lista_indicadores');
	}

	public function datos_indicador()
	{
		$this->load->view('datos_indicador');
	}

	public function grafica()
	{
		$this->load->view('grafica');
	}

	public function datos()
	{
		$this->load->view('datos_abiertos');
	}
}