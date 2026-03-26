<?php
//importação da conexção com o banco de dados
require_once 'conexao.php';
try {
    //Captura os dados enviados pelo frontend
    $id = $_POST['id'];
    $departamento = $_POST['departamento'];
    $area = $_POST['area'];
   
    
    

$sql = "UPDATE tb_departamentos SET area='$area',departamento='$departamento' WHERE id = $id ";
$comando = $conexao->prepare($sql);
$comando->execute();
//echo "cadastro realizado com sucesso!";
header('location: ../departamentos-listar.php');
} catch (PDOException $erro) {
    echo "Não foi possível atualizar".$erro->getMessage();
}


?>