<?php
//importação da conexção com o banco de dados
require_once 'conexao.php';
try {
    //Captura os dados enviados pelo frontend
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $departamento = $_POST['departamento'];

$sql = "INSERT INTO tb_funcionarios (nome,email,telefone,departamento) VALUES ('$nome','$email','$telefone','$departamento')";
$comando = $conexao->prepare($sql);
$comando->execute();
echo "cadastro realizado com sucesso!";

} catch (PDOException $erro) {
    echo "Não foi possível cadastrar".$erro->getMessage();
}


?>