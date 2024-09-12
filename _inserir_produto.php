<?php 

include 'conexao.php';


$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO `estoque`( `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto, '$nomeproduto','$categoria', $quantidade, '$fornecedor')";

$inserir = mysqli_query($conexao, $sql);
















 ?>