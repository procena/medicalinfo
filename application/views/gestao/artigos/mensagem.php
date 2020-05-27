<?
/**
 * @var TYPE_NAME $mensagem
 * @var TYPE_NAME $tipoMensagem
 */
?>
<!doctype html>
<html lang="en">
<head>
	<?
	$this->load->view('gestao/layout/head', array('mainTitle' => 'Publicação de Artigos - MedicaInfo'), FALSE);
	?>
</head>
<body>
<div class="wrapper">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="alert alert-<?= $tipoMensagem; ?> alert-with-icon" data-notify="container">
					<button type="button" aria-hidden="true" class="close">×</button>
					<span data-notify="icon" class="pe-7s-bell"></span>
					<span data-notify="message"><?= $mensagem; ?></span>
				</div>
				<div class="text-center"><a class="btn btn-primary" href="<?= base_url('gestao') ?>"><i
							class="fa fa-backward"></i>Voltar</a></div>
			</div>
		</div>
	</div>
</div>

<?
$this->load->view('gestao/layout/foot', null, FALSE);
?>
</body>
</html>
