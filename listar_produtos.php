<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Lista dos Produtos</title>
</head>
<body>

	<div class="container" style="margin-top: 40px;">

		<h3>Lista de Produtos</h3>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nro Produto</th>
					<th scope="col">Nome Produto</th>
					<th scope="col">Categoria</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Fornecedor</th>
				</tr>
			</thead>

			<?php 
			include 'conexao.php';
			$sql = "SELECT * FROM `estoque`";

			$busca = mysqli_query($conexao, $sql);


			while ($array = mysqli_fetch_array($busca)) {

				$id_estoque = $array['id_estoque'];
				$nroproduto = $array['nroproduto'];
				$nomeproduto = $array['nomeproduto'];
				$categoria = $array['categoria'];
				$quantidade = $array['quantidade'];
				$fornecedor = $array['fornecedor'];

				?>
				<tr>
					<td> <?php echo $nroproduto ?>   </td>
					<td> <?php echo $nomeproduto ?>   </td>
					<td> <?php echo $categoria ?>   </td>
					<td> <?php echo $quantidade ?>   </td>
					<td> <?php echo $fornecedor ?>   </td>

				<?php } ?>

			</tr>
		</table>
	</div>








	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>