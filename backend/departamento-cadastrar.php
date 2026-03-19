<?php
//importação da conexção com o banco de dados
require_once 'conexao.php';
try {
    //Captura os dados enviados pelo frontend
    $departamento_1 = $_POST['departamento'];
    $area = $_POST['area'];
$sql = "INSERT INTO tb_departamentos (departamento,area) VALUES ('$departamento_1','$area')";
$comando = $conexao->prepare($sql);
$comando->execute();
echo "cadastro realizado com sucesso!";
header('location: ../departamentos-listar.php');
} catch (PDOException $erro) {
    echo "Não foi possível cadastrar".$erro->getMessage();
}


?>