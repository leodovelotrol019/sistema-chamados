<?php
//importação da conexção com o banco de dados
require_once 'conexao.php';
try {
    //Captura os dados enviados pelo frontend via GET
$id = $_GET['id'];

$sql = "DELETE FROM tb_empresas WHERE id = $id";
$comando = $conexao->prepare($sql);
$comando->execute();
//echo "cadastro realizado com sucesso!";
header('location: ../empresas-listar.php');
} catch (PDOException $erro) {
    echo "Não foi possível deletar".$erro->getMessage();
}


?>