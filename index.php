<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Cadastrar Produtos</title>
	<style type="text/css" >
		
		#tamanhoContainer {
			width: 500px;
		}

		#botao {
			background-color: #4060DC;
			color: #ffffff;
		}
		
	</style>

	<title>Formulário de Cadastro</title>
</head>
<body>

	<div class="container" id="tamanhoContainer">
		<h4>Formulário de Cadastro</h4>
		<form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
			<div class="form-group">
				<label>Número do Produto</label>
				<input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" required>
			</div>

			<div class="form-group">
				<label>Nome do Produto</label>
				<input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" required>  
			</div>

			<div class="form-group">
				<label>Quantidade</label>
				<input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" required>
			</div>


			<div class="form-group">
				<label >Categoria</label>
				<select multiple class="form-control" name="categoria" required>
					<option>Periféricos</option>
					<option>Hardware</option>
					<option>Software</option>
					<option>Celulares</option>

				</select>
			</div>

			<div class="form-group">
				<label >Fornecedor</label>
				<select multiple class="form-control" name="fornecedor" required >
					<option>Fornecedor A</option>
					<option>Fornecedor B</option>
					<option>Fornecedor C</option>
					<option>Fornecedor D</option>

				</select>
			</div>

			<div style="text-align: right;">
				<button type="submit"  id="botao"   class="btn btn-sm" >Cadastrar</button>

			</div>

		</form>
	</div>






	<script type="text/javascript" src="js/bootstrap.javascript"></script>
</body>
</html>
