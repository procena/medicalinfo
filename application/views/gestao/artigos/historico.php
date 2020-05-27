<?
/**
 * @var TYPE_NAME $artigos
 * @var TYPE_NAME $tipoMensagem
 */
?>
<!doctype html>
<html lang="en">
<head>
	<?
	$this->load->view('gestao/layout/head', array('mainTitle' => 'Listagem de Artigos - MedicaInfo'), FALSE);
	?>
</head>
<body>
<div class="wrapper">
	<?
	$this->load->view('gestao/layout/sidebar', array('item' => 'historico'), FALSE);
	?>
	<div class="main-panel">
		<?
		$this->load->view('gestao/layout/navbar', null, FALSE);
		?>
		<div class="content">
			<div class="container-fluid">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h4 class="title">Listagem de Artigos Publicados</h4>
						</div>
						<div class="content table-responsive table-full-width">
							<table class="table table-hover table-striped">
								<thead>
								<tr>
									<th>ID</th>
									<th>Titulo</th>
									<th>Categoria</th>
									<th>Data de Publicação</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								<? foreach ($artigos as $artigo): ?>
									<tr>
										<th><?= $artigo->idpublicacoes ?></th>
										<td><?= $artigo->titulo ?></td>
										<td><?= $artigo->categoria ?></td>
										<td><?= $artigo->data_registo ?></td>
										<td>
											<button class="btn btn-sm btn-primary"
													onclick="demo.notificacaoFuncionalidade('top','right')"><i
													class="pe-7s-pen"></i></button>
											<a class="btn btn-sm btn-secondary"
											   href="<?= base_url('artigo/consulta/' . $artigo->idpublicacoes) ?>" target="_blank"><i class="pe-7s-note2"></i></a>
										</td>
									</tr>

								<? endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?
		$this->load->view('gestao/layout/footer', null, FALSE);
		?>
	</div>
</div>

<?
$this->load->view('gestao/layout/foot', null, FALSE);
?>
</body>
</html>
