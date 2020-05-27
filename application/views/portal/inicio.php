<!DOCTYPE html>
<html lang="en">

<head>
	<?
	$this->load->view('portal/layout/head', array('mainTitle'=>'Portal Medical-Info'), FALSE);
	?>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!--banner-->
<section id="inicio" class="banner">
	<div class="bg-color">
		<?
		$this->load->view('portal/layout/navbar', array('mainTitle' => 'Poral Medical-Info'), FALSE);
		?>
		<div class="container">
			<div class="row">
				<div class="banner-info">
					<div class="banner-logo text-center">
						<img src="<?= portal_base_url_lib('img/logo.png') ?>" class="img-responsive">
					</div>
					<div class="banner-text text-center">
						<h1 class="white">Artigos de Saúde a um clique de distancia!!</h1>
						<p>Tenha acesso artigos e publicações relacionados com sáude e doenças.</p>
						<a href="#pesquisas" class="btn btn-appoint">Pesquisar <i class="fa fa-search"></i></a>
					</div>
					<div class="overlay-detail text-center">
						<a href="#pesquisas"><i class="fa fa-angle-down"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ banner-->


<?
#-- Pesquisa de Artigos
/** @var TYPE_NAME $categorias */
$this->load->view('portal/pesquisa-artigo', array('categorias'=>$categorias), FALSE);
#--/ Pesquisa de Artigos
echo '<hr>';
#-- Sobre
$this->load->view('portal/sobre', null, FALSE);
#--/ Sobre
echo '<hr>';
#-- Contacto
$this->load->view('portal/contacto', null, FALSE);
#-- / Contacto
?>
<!--/ Contacto-->
<?
$this->load->view('portal/layout/footer', null, FALSE);
$this->load->view('portal/layout/foot', null, FALSE);
?>

</body>
</html>
