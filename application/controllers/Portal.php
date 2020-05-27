<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller
{
	public $data_view;

	/**
	 * Portal constructor.
	 * @param $data_view
	 */
	public function __construct()
	{
		parent::__construct();
		$this->data_view = array();
	}

	public function index()
	{
		$this->load->model('gestao/categorias');
		$categorias = new Categorias();
		$this->data_view['categorias'] = $categorias->obterCategoria_todos();
		$this->load->view('portal/inicio', $this->data_view, FALSE);
	}

	public function leitura_artigo($id)
	{
		$this->load->model('gestao/publicacao');
		$artigos = new Publicacao();
		$artigo = $artigos->obterArtigo_id($id);

		$this->data_view['conteudo'] = file_get_contents('biblioteca/'.$artigo['artigo']);
		$this->data_view['artigo'] = $artigo;
		$this->load->view('portal/resultados-artigos/leitura_artigo',$this->data_view, FALSE);
	}

	public function listar_artigos()
	{
		$dataInput = $this->input->post(null, TRUE);
		$this->load->model('gestao/publicacao');
		$artigos = new Publicacao();
		if ($dataInput['categoria'] === 'todos') {
			$this->data_view['resultados'] = $artigos->obterArtigo_todos();
		} else {
			$this->data_view['resultados'] = $artigos->obterArtigo_filtro(array('categoria' => $dataInput['categoria'],
				'palavra-chave' => $dataInput['palavra-chave']));
		}

		$this->load->view('portal/resultados-artigos/listar_artigos', $this->data_view, FALSE);
	}

}
