<?php
require_once 'conexao.php';

try {
     $nome = $_POST['nome'];
     $area = $_POST['area'];
     $responsavel = $_POST['responsavel'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

//inserção de dados no "BANCO DE DADOS"
$sql = "INSERT INTO tb_empresas (nome,area,responsavel,email,telefone) VALUES ('$nome','$area','$responsavel','$email','$telefone')";

$comando = $conexao->prepare($sql);

$comando->execute();
echo "cadastro realizado com sucesso! ";


} catch (PDOException $erro) {
    echo "Não foi possivel ser feito o CADASTRO!".$erro->getMessage();
}


?>