<?php
//importação da conexção com o banco de dados
require_once 'conexao.php';
try {
    //Captura os dados enviados pelo frontend
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $departamento = $_POST['departamento'];

$sql = "UPDATE tb_funcionarios SET nome='$nome',email='$email',telefone='$telefone',departamento='$departamento' WHERE id = $id ";
$comando = $conexao->prepare($sql);
$comando->execute();
//echo "cadastro realizado com sucesso!";
header('location: ../funcionarios-listar.php');
} catch (PDOException $erro) {
    echo "Não foi possível cadastrar".$erro->getMessage();
}


?>