<?php
//busca as informações no banco de dados, para exibir na tela


//puxa a conexão do banco via php
require_once 'backend/conexao.php';
try{
    //comando para de listagem SQL
    $sql = "SELECT * FROM tb_empresas";
    
    //prepara a execução do comando SQL
    $comando = $conexao->prepare($sql);
    //executa o camando acima
    $comando->execute();

    //cria um array e armazena os dados retornados pelo banco
    $empresas = $comando->fetchAll(PDo::FETCH_ASSOC);

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
    <title>Sistema de chamados - Empresas</title>
    <link rel="stylesheet" href="assets/css/cadastros.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
<nav>
<header><h1>Empresas - Lista de Cadastros</h1>
            <ul>
                
                <li><a href="empresas.php">Empresas Cadastrar</a></li>
                
            </ul>

        </nav>

</header>
    <main>
    
    <div id="container-lista">
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Area</th>
            <th>Responsavel</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data Cadastro</th>
            <th>Ativo</th>
        </tr>
        <?php
        foreach ($empresas as $empresa): 
            
        
        ?>
        <tr>
            <td><?php echo $empresa ['id'];?></td>
            <td><?php echo $empresa ['nome'];?></td>
            <td><?php echo $empresa ['area'];?></td>
            <td><?php echo $empresa ['responsavel'];?></td>
            <td><?php echo $empresa ['email'];?></td>
            <td><?php echo $empresa ['telefone'];?></td>
            <td><?php echo $empresa ['data'];?></td>
            <td><?php echo $empresa ['ativo'];?></td>
        </tr>
        <?php endforeach;?>
        
    </table>
    </div>
    </main>
</body>
</html>