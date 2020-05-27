<?
/**
 * @var TYPE_NAME $conteudo
 * @var TYPE_NAME $artigo

 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?
	$this->load->view('portal/resultados-artigos/layout/head', array('mainTitle' => 'Portal Medical-Info'), FALSE);
	?>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	<?
	$this->load->view('portal/resultados-artigos/layout/navbar');
	?>

	<section id="boxes" class="home-section paddingtop-80">
		<div class="container paddingbot-20 paddingtop-30">
			<h1><?= $artigo['titulo']?></h1>
			<?=
			$conteudo ?>
		</div>
		<p class="text-right">Data de Publicação: <?= $artigo['data_registo']?></p>
	</section>
</div>
<?
#$this->load->view('portal/resultados-artigos/layout/footer', null, FALSE);
$this->load->view('portal/resultados-artigos/layout/foot', null, FALSE);
?>

</body>
</html>
