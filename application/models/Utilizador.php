<?php


class Utilizador extends CI_Model
{


	/**
	 * Utilizador constructor.
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function autenticar_utilizador($conta, $passe)
	{
		$query = $this->db->get('utilizadores', array('conta' => $conta));

		if ($query->num_rows() === 1) {
			$resultado = $query->row();
			$newdata = array(
				'conta'  => $resultado->conta,
				'validado' => TRUE
			);
			$this->session->set_userdata($newdata);
			return password_verify($passe, $resultado->passe);
		}
		return false;
	}
}
