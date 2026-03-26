<?php
//importação da conexção com o banco de dados
require_once 'conexao.php';
try {
    //Captura os dados enviados pelo frontend
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $area = $_POST['area'];
    $responsavel = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    

$sql = "UPDATE tb_empresas SET nome='$nome',area='$area',responsavel='$responsavel',email='$email',telefone='$telefone' WHERE id = $id ";
$comando = $conexao->prepare($sql);
$comando->execute();
//echo "cadastro realizado com sucesso!";
header('location: empresas-listar');
} catch (PDOException $erro) {
    echo "Não foi possível atualizar".$erro->getMessage();
}


?>