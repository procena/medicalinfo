<?
/** @var TYPE_NAME $resultados */
#print_r($resultados);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?
	$this->load->view('portal/resultados-artigos/layout/head', array('mainTitle' => 'Resultados de Artigos'))
	?>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	<?
	$this->load->view('portal/resultados-artigos/layout/navbar');
	?>
	<section id="boxes" class="home-section paddingtop-80">

		<div class="container">
			<div class="row">
				<?
				if (sizeof($resultados) > 0):
					foreach ($resultados as $resultado) : ?>
						<div class="col-sm-12 pricing-box">
							<div class="wow bounceInUp" data-wow-delay="0.1s">
								<div class="pricing-content general">
									<h2><a class="btn btn-skin btn-lg"
											href="<?= base_url('artigo/consulta/' . $resultado->idpublicacoes) ?>"><?= $resultado->titulo ?></a></h2>

									<div class="price-bottom text-truncate col-12" style="max-font-size: 9px!important; overflow-y: hidden; max-height: 250px!important;">
										<?= $resultado->resumo ?>
									</div>
								</div>
							</div>
						</div>
					<br>
					<hr>
					<?
					endforeach;
				else:
					?>
				<div class="alert alert-info margintop-50">Foram encontrados 0 resultados</div>
				<?
				endif;
				?>
			</div>
		</div>
	</section>
	<?
	#$this->load->view('portal/layout/footer');
	?>
</div>
<?
$this->load->view('portal/resultados-artigos/layout/foot');
?>
</body>
</html>
