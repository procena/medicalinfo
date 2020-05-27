<?
/** @var TYPE_NAME $item */
?>
<div class="sidebar" data-color="green" data-image="<?= base_url_lib('assets/img/sidebar-4.jpg')?>">

	<!--

		Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
		Tip 2: you can also add an image using data-image tag

	-->

	<div class="sidebar-wrapper">
		<div class="logo">
			<a href="http://www.creative-tim.com" class="simple-text">
				Medical Info
			</a>
		</div>

		<ul class="nav">
			<li class="<?=
			($item === 'dashboard' ? 'active' : '')?>">
				<a href="<?= base_url('gestao')?>">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
				</a>
			</li>
			<li class="<?=($item === 'publicar' ? 'active' : '')?>">
				<a href="<?= base_url('artigos/publicar')?>"> <i class="pe-7s-news-paper"></i><p>Publicar</p></a>
			</li>
			<li class="<?=($item === 'historico' ? 'active' : '')?>">
				<a href="<?= base_url('artigos/historico')?>"> <i class="pe-7s-box1"></i><p>Biblioteca</p></a>
			</li>
			<li class="<?=($item === 'categorias' ? 'active' : '')?>">
				<a href="<?= base_url('artigos/categorias')?>"> <i class="pe-7s-ticket"></i><p>Categorias</p></a>
			</li>
			<li>
				<a href="<?= base_url('')?>"><i class="pe-7s-browser"></i> Portal</a>
			</li>
		</ul>
	</div>
</div>
