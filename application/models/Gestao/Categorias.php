<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Model
{

	/**
	 * Categorias constructor.
	 */
	public function __construct()
	{

		parent::__construct();
	}

	public function obterCategoria_todos()
	{
		return $this->db->get('categorias')->result();
	}

	public function listarCategorias_publicacoes_todos()
	{
		return $this->db->query('select c.*, (select count(*) from publicacoes p where p.categoria = c.descricao) as qtdPublicacoes from categorias c')->result();
	}

	public function inserirCategoria($dataInput)
	{
		$this->db->insert('categorias', $dataInput);
		return $this->db->affected_rows() > 0;
	}
}
