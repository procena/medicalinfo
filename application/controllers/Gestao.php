<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestao extends CI_Controller
{
	public $data_view;

	/**
	 * Gestao constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->data_view = array();
	}

	public function index()
	{
		if (isset($this->session->validado) and $this->session->validado):
			#echo password_hash('secret+1', 1);
			$this->load->view('gestao/dashboard', $this->data_view, false);
		else:
			$this->load->view('gestao/iniciarSessao', $this->data_view, false);
		endif;
	}

	public function publicar_artigo()
	{
		$this->load->model('gestao/categorias');
		$categorias = new Categorias();
		$this->data_view['categorias'] = $categorias->obterCategoria_todos();
		$this->load->view('gestao/artigos/publicar', $this->data_view, false);
	}

	public function historico_artigos()
	{
		$this->load->model('gestao/Publicacao');
		$publicacoes = new Publicacao();
		$this->data_view['artigos'] = $publicacoes->obterArtigo_todos();
		$this->load->view('gestao/artigos/historico', $this->data_view, false);
	}

	public function inserir_artigo()
	{
		$this->load->model('gestao/publicacao');
		$novaPublicacao = new Publicacao();

		$dataInput['categoria'] = $this->input->post('categoria', TRUE);
		$dataInput['titulo'] = $this->input->post('titulo', TRUE);
		$dataInput['resumo'] = substr($this->input->post('artigo', TRUE), 0, 200) . '...';
		if (isset($dataInput['titulo'])):
			$newIdArticle = $novaPublicacao->inserir_publicacao($dataInput);
			if ($newIdArticle > 0) {

				$fileArtigo = fopen('biblioteca/artigo-' . $dataInput['titulo'] . '.txt',
					"w") or die("Não foi possivel guardar o artigo!");
				fwrite($fileArtigo, $this->input->post('artigo', TRUE));
				$this->data_view['mensagem'] = 'O artigo ' . $dataInput['titulo'] . ' foi publicado!';
				$this->data_view['idArtigo'] = $newIdArticle;
				$this->data_view['tipoMensagem'] = 'success';
			} else {
				$this->data_view['mensagem'] = 'O artigo ' . $dataInput['titulo'] . ' não foi publicado devido a uma falha na base de dados';
				$this->data_view['tipoMensagem'] = 'error';
			}
		else:
			$this->data_view['tipoMensagem'] = 'warning';
			$this->data_view['mensagem'] = 'Erro na publicação do artigo';
		endif;
		$this->load->view('gestao/artigos/mensagem', $this->data_view, FALSE);
	}

	function categorias_artigos()
	{
		$this->load->model('gestao/categorias');
		$categorias = new Categorias();
		$this->data_view['categorias'] = $categorias->listarCategorias_publicacoes_todos();
		$this->load->view('gestao/artigos/categorias', $this->data_view, false);
	}

	function inserir_categoria()
	{
		$this->load->model('gestao/categorias');
		$categorias = new Categorias();
		if ($categorias->inserirCategoria($this->input->post(null, TRUE))) {
			$this->data_view['status'] = true;
			$this->data_view['mensagem'] = 'Categoria salvo com sucesso!';
		} else {
			$this->data_view['status'] = false;
			$this->data_view['mensagem'] = 'Não foi possivel salvar a categoria! ERROR: INSDB-001';
		}
		echo json_encode($this->data_view);
	}

	public function terminar_sessao()
	{
		session_destroy();
		redirect('');
	}

	public function autenticar_sessao()
	{
		$this->load->model('utilizador');
		$autenticacao = new Utilizador();
		$dataInput = $this->input->post();
		if ($autenticacao->autenticar_utilizador($dataInput['conta'], $dataInput['passe'])) {
			redirect('gestao');
		} else {
			$this->load->view('errors/html/error_general', array('heading' => 'Erro de Autenticação', 'message' => 'Não foi possivel validar as suas credencias<br><a href="' . base_url() . '">Voltar Inicio</a>'));
		}
	}

}
