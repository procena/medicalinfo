<!doctype html>
<html lang="en">
<head>
	<?
	$this->load->view('gestao/layout/head', array('mainTitle' => 'Dashboard - MedicaInfo'), FALSE);
	?>

</head>
<body>

<div class="wrapper">

	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 mx-md-auto">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title text-center">Iniciar Sessão</h4>
					</div>
					<div class="card-body">
						<?= form_open(base_url('gestao/autenticarsessao'), array('style' => 'margin: 20px')) ?>
						<div class="form-group">
							<label class="control-label" for="conta">Conta</label>
							<input type="text" name="conta" id="conta" class="form-control"
								   placeholder="Conta Utilizador"
								   value="admin">
						</div>
						<div class="form-group">
							<label class="control-label" for="passe">Palavra-passe</label>
							<input type="password" name="passe" id="passe" class="form-control"
								   placeholder="Palavra-passe">
						</div>
						<button type="submit" class="btn btn-info btn-fill marginbot-50 pull-right">Iniciar Sessão
						</button>
						<div class="clearfix"></div>
						<?= form_close() ?>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>

	</div>
</div>
<?
$this->load->view('gestao/layout/foot');
?>

</body>
</html>
