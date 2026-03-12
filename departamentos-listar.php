<?php
//busca as informações no banco de dados, para exibir na tela


//puxa a conexão do banco via php
require_once 'backend/conexao.php';
try{
    //comando para de listagem SQL
    $sql = "SELECT * FROM tb_departamentos";
    
    //prepara a execução do comando SQL
    $comando = $conexao->prepare($sql);
    //executa o camando acima
    $comando->execute();

    //cria um array e armazena os dados retornados pelo banco
    $departamentos = $comando->fetchAll(PDo::FETCH_ASSOC);

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
    <title>Sistema de chamados - Departamendo</title>
    <link rel="stylesheet" href="assets/css/cadastros.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Departamentos - Lista de Cadastros</h1>
    <table >
        <tr>
            <th>Id</th>
            <th>Departamento</th>
            <th>Area</th>
            <th>Data Cadastro</th>
            <th>Ativo</th>
        </tr>
        <?php
        foreach ($departamentos as $departamento): 
            
        
        ?>
        <tr>
            <td><?php echo $departamento ['id'];?></td>
            <td><?php echo $departamento ['area'];?></td>
            <td><?php echo $departamento ['departamento'];?></td>
            <td><?php echo $departamento ['data_cadastro'];?></td>
            <td><?php echo $departamento ['ativo'];?></td>
        </tr>
        <?php endforeach;?>
    </table>
    
</body>
</html>