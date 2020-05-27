<?
/** @var TYPE_NAME $categorias */
?>
<section id="pesquisas" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<h2 class="ser-title">Nossos Artigos</h2>
				<hr class="botm-line">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
					et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
					cillum.</p>
			</div>
			<div class="col-md-8 col-sm-8">
				<div class="service-info">
					<div class="icon">
						<i class="fa fa-search"></i>
					</div>
					<div class="icon-info">
							<?= form_open(base_url('artigo/resultados'),array('class'=>'form-horizontal col-md-5'))?>
							<div class="form-group">
								<label class="control-label" for="categoria">Categoria</label>
								<select required class="form-control" name="categoria" id="categoria">
									<option value="todos" selected>Todos</option>
									<?
									foreach ($categorias as $categoria):
									?>
									<option value="<?= $categoria->descricao?>"><?= $categoria->descricao;?></option>
									<?
									endforeach;
									?>
								</select>
							</div>
							<div class="form-group">
								<label class="control-label" for="palavra-chave">Palavra-chave</label>
								<input type="text" name="palavra-chave" id="palavra-chave" class="form-control">
							</div>
							<div class="text-center">
								<button class="btn btn-primary">Pesquisar <i class="fa fa-search"></i></button>
							</div>
						<?= form_close()?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
