<?php


class Publicacao extends CI_Model
{

	/**
	 * Publicacao constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function inserir_publicacao($dataInput)
	{
		$this->db->insert('publicacoes', $dataInput);
		return $this->db->insert_id();
	}

	public function obterArtigo_id($id_artigo)
	{
		$this->db->reconnect();
		return $this->db->get_where('publicacoes', array('idpublicacoes' => $id_artigo))->row_array();
	}

	public function obterArtigo_todos()
	{
		return $this->db->get('publicacoes')->result();
	}

	public function obterArtigo_filtro($dataFiltro){
		$this->db->like('resumo', $dataFiltro['palavra-chave']);
		return $this->db->get_where('publicacoes',array('categoria'=>$dataFiltro['categoria']))->result();
	}
}
