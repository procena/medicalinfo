<?
/** @var TYPE_NAME $categorias */
?>
<!doctype html>
<html lang="en">
<head>
	<?
	$this->load->view('gestao/layout/head', array('mainTitle' => 'Publicação de Artigos - MedicaInfo'), FALSE);
	?>
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/jQuery-TE_v.1.4.0/jquery-te-1.4.0.css') ?>">


</head>
<body>
<div class="wrapper">
	<?
	$this->load->view('gestao/layout/sidebar', array('item'=>'publicar'), FALSE);
	?>
	<div class="main-panel">
		<?
		$this->load->view('gestao/layout/navbar', null, FALSE);
		?>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<?= form_open(base_url('gestao/inserirArtigo'), array('class' => 'col-md-12 mx-md-auto')) ?>
					<div class="form-row">
						<div class="col-md-5">
							<div class="form-group">
								<label for="titulo" class="control-label">Titulo</label>
								<input type="text" name="titulo" id="titulo" required class="form-control">
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label for="categoria" class="control-label">Categoria</label>
								<select name="categoria" id="categoria" class="form-control" required>
									<option disabled selected value="">Seleccionar categorias...</option>
									<?
									foreach ($categorias as $categoria):
									?>
									<option value="<?= $categoria->descricao; ?>"><?= $categoria->descricao; ?></option>
									<?
									endforeach;
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<textarea name="artigo" class="jqte-test" style="resize: none !important" placeholder="escreva o seu artigo..."></textarea>
					</div>
					<div class="text-center col-md-12">
						<button class="btn btn-success btn-lg">Publicar</button>
					</div>
					<?= form_close() ?>
				</div>
			</div>
		</div>
		<?
		$this->load->view('gestao/layout/footer', null, FALSE);
		?>
	</div>
</div>

</body>
<?
$this->load->view('gestao/layout/foot', null, FALSE);
?>
<script type="text/javascript" src="<?= base_url('assets/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js') ?>"
		charset="utf-8"></script>
<script>
    $('.jqte-test').jqte();
</script>

</html>
