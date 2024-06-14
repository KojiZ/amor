<?php
include_once("./config/conexao.php");
include_once("./config/constantes.php");
include_once("./func/funcoes.php");

$conn = connection();
if (isset($_POST['nomeprod'])) {
    $name = $_POST['nomeprod'];
    $foto = $_POST['fotoprod'];
    $valor = $_POST['valorprod'];
    $desc = $_POST['descprod'];
    $stmt = $conn->prepare("INSERT INTO `blindzone`.`produto` (`nome`, `foto`, `valor`, `descricao`) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $foto);
    $stmt->bindParam(3, $valor);
    $stmt->bindParam(4, $desc);
    $conn->beginTransaction();
    $stmt->execute();
    $conn->commit();
    header('location:dashboard.php?page=produto');
}
 