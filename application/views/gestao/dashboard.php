<!doctype html>
<html lang="en">
<head>
	<?
	$this->load->view('gestao/layout/head', array('mainTitle' => 'Dashboard - MedicaInfo'), FALSE);
	?>

</head>
<body>

<div class="wrapper">
	<?
	$this->load->view('gestao/layout/sidebar', array('item'=>'dashboard'), FALSE);
	?>

	<div class="main-panel">
		<?
		$this->load->view('gestao/layout/navbar', null, FALSE);
		?>


		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<div class="card">

							<div class="header">
								<h4 class="title">Estatisticas de Pesquisa</h4>
								<p class="category">Com base ao acesso dos leitores</p>
							</div>
							<div class="content">
								<div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

								<div class="footer">
									<div class="legend">
										<i class="fa fa-circle text-info"></i> Doenças
										<i class="fa fa-circle text-danger"></i> Palavras-chaves
										<i class="fa fa-circle text-warning"></i> Leitura
									</div>
									<hr>
									<div class="stats">
										<i class="fa fa-clock-o"></i> Informação actualizada 2 dias atras
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-8">
						<div class="card">
							<div class="header">
								<h4 class="title">Acessos de Leitores</h4>
								<p class="category">24 Hours performance</p>
							</div>
							<div class="content">
								<div id="chartHours" class="ct-chart"></div>
								<div class="footer">
									<div class="legend">
										<i class="fa fa-circle text-info"></i> Aberto
										<i class="fa fa-circle text-danger"></i> Clicado
										<i class="fa fa-circle text-warning"></i> Clicado Segunda Vez
									</div>
									<hr>
									<div class="stats">
										<i class="fa fa-history"></i> Actualizado a 3 minutos atras
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12">
						<div class="card ">
							<div class="header">
								<h4 class="title">Balanço Anual</h4>
								<p class="category">Todos os Artigos publicados</p>
							</div>
							<div class="content">
								<div id="chartActivity" class="ct-chart"></div>

								<div class="footer">
									<hr>
									<div class="stats">
										<i class="fa fa-check"></i> Actualizado a 3 minutos atras
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?
		$this->load->view('gestao/layout/footer');
		?>

	</div>
</div>
<?
$this->load->view('gestao/layout/foot');
?>

<script type="text/javascript">
    $(document).ready(function () {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Bem-vindo <b>Medical-Info Dashboard</b> - a informação actualizada em um clique de distancia."

        }, {
            type: 'info',
            timer: 4000
        });

    });
</script>

</body>


</html>
