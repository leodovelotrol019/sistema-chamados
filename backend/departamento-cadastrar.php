<?php
//importação da conexção com o banco de dados
require_once 'conexao.php';
try {
    //Captura os dados enviados pelo frontend
    $departamento = $_POST['departamento'];
    $area = $_POST['area'];
$sql = "INSERT INTO tb_departamentos (departamento,area) VALUES ('$departamento','$area')";
$comando = $conexao->prepare($sql);
$comando->execute();
echo "cadastro realizado com sucesso!";

} catch (PDOException $erro) {
    echo "Não foi possível cadastrar".$erro->getMessage();
}


?>