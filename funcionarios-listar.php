<?php
//busca as informações no banco de dados, para exibir na tela


//puxa a conexão do banco via php
require_once 'backend/conexao.php';
try{
    //comando para de listagem SQL
    $sql = "SELECT * FROM tb_funcionarios";
    
    //prepara a execução do comando SQL
    $comando = $conexao->prepare($sql);
    //executa o camando acima
    $comando->execute();

    //cria um array e armazena os dados retornados pelo banco
    $funcionarios = $comando->fetchAll(PDo::FETCH_ASSOC);

    // echo "<pre>";
    // var_dump($funcionarios);
}
catch(PDOException $erro)
{
echo "Não foi possivel se conectar o banco";
}


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de chamados - Funcionários</title>
    <link rel="stylesheet" href="assets/css/cadastros.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Funcionários - Lista de Cadastros</h1>
    <table >
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Departamento</th>
            <th>Data Cadastro</th>
            <th>Ativo</th>
        </tr>
        <?php
        foreach ($funcionarios as $funcionario): 
            
        
        ?>
        <tr>
            <td><?php echo $funcionario ['id'];?></td>
            <td><?php echo $funcionario ['nome'];?></td>
            <td><?php echo $funcionario ['email'];?></td>
            <td><?php echo $funcionario ['telefone'];?></td>
            <td><?php echo $funcionario ['departamento'];?></td>
            <td><?php echo $funcionario ['data_cadastro'];?></td>
            <td><?php echo $funcionario ['ativo'];?></td>
        </tr>
        <?php endforeach;?>
    </table>
    
</body>
</html>