<?php
include_once("./config/conexao.php");
include_once("./config/constantes.php");
include_once("./func/funcoes.php");
$conn = connection();

if (isset($_GET['idproduto'])) {
  $id = $_GET['idproduto'];
  $delete = "DELETE FROM produto WHERE idproduto = :id";
  $delete = $conn->prepare($delete);
  $delete->bindParam(':id', $id);
  $conn->beginTransaction();
  $delete->execute();
  $conn->commit();
  header('location:dashboard.php?page=produto');
}
