<?
/**
 * @var TYPE_NAME $categorias
 * @var TYPE_NAME $tipoMensagem
 */
?>
<!doctype html>
<html lang="en">
<head>
	<?
	$this->load->view('gestao/layout/head', array('mainTitle' => 'Listagem de Categorias de Artigos - MedicaInfo'), FALSE);
	?>
</head>
<body>
<div class="wrapper">
	<?
	$this->load->view('gestao/layout/sidebar', array('item' => 'categorias'), FALSE);
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
							<h4 class="title">Listagem de Categorias de Artigos</h4>
							<button class="btn" data-toggle="modal" data-target="#add-categoria">Inserir</button>
						</div>
						<div class="content table-responsive table-full-width">
							<table class="table table-hover table-striped">
								<thead>
								<tr>
									<th>ID</th>
									<th>Descrição</th>
									<th>Nº de Artigos</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								<? foreach ($categorias as $categoria): ?>
									<tr>
										<th><?= $categoria->idcategorias ?></th>
										<td><?= $categoria->descricao ?></td>
										<td><?= $categoria->qtdPublicacoes ?></td>
										<td>
											<button class="btn btn-sm btn-primary"
													onclick="demo.notificacaoFuncionalidade('top','right')"><i
													class="pe-7s-pen"></i></button>
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
	<div class="modal fade" id="add-categoria" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Registo de Categoras de Artigos</h5>
					<button type="button" class="close" id="btn-close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" id="form-add-categorias"
						  style="padding: 20px; width: 85%; margin: 0 auto">
						<div class="form-group">
							<label class="col-form-label" for="descricao-categoria">Descrição</label>
							<input class="form-control" id="descricao-categoria" name="descricao" required>
						</div>
						<button hidden type="submit" id="btn-inserir">inserir</button>
					</form>
				</div>
				<div class="modal-footer text-right">
					<button class="btn btn-success" id="btn-add-categoria">Salvar</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?
$this->load->view('gestao/layout/foot', null, FALSE);
?>
<script>
    $(function (e) {
        var formAddCategoria = $("#form-add-categorias");
        var urlInserirCategoria = '<?= base_url('artigos/inserirCategoria')?>';
        $("#btn-add-categoria").click(function () {
            $("#btn-inserir").trigger('click');
        });

        formAddCategoria.submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: urlInserirCategoria,
                dataType: 'json',
                data: formAddCategoria.serialize(),
                type: 'post',
                success: function (dataReturn) {
                    console.log(dataReturn);
                    $("#btn-close").trigger('click');
                    if (dataReturn.status) {
                        demo.notificaoInsertCategoria('top', 'right', dataReturn.mensagem, 2);
                    } else {
                        demo.notificaoInsertCategoria('top', 'right', dataReturn.mensagem);
                    }
                    formAddCategoria[0].reset();
                },
                error: function (xhr) {
                    console.log(xhr);
                    demo.notificaoInsertCategoria('top', 'right', 'Não foi possivel salvar a categoria! ERROR: INSRV-001');
                }
            })
        })
    })
</script>
</body>
</html>
