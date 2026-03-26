<?php

// adicionar o arquivo de conexão
require_once 'backend/conexao.php';

try{
$id = $_GET['id'];
$sql = "SELECT * FROM tb_departamentos WHERE id = $id";
$comando = $conexao->prepare($sql);
$comando->execute();


//guarda os dados do usuario em um array
$departamento = $comando->fetch(PDO::FETCH_ASSOC);
}
catch(PDOException $erro){
echo 'Erro ao buscar os dados:'.$erro->getMessage();
}



?>






<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cadastros.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sistema Chamados - Departamentos</title>
</head>

<body>
    
 
<header><h1>EDITAR - Departamentos</h1>
<nav>
            <ul>
                
            
                <li><a href="departamentos-listar.php">Voltar</a></li>
                
            </ul>

        </nav>
</header>
    <main>
    <div id="container">
    <h1>Empresas - Editar</h1>
    <form action="backend/departamento-atualizar.php" method="POST">
        
        
            <div class="areas">

             <div>
            <label for="id">ID</label>
            <input type="text" name="id" id="id" value="<?php echo $departamento['id'] ?>" readonly>
        </div>

 <div>
            <label for="departamento">Departamento</label>
            <input type="text" name="departamento" id="departamento" value= " <?php echo $departamento['departamento'] ?>">
        </div>
        
    


            <div>
            <label for="area">Area</label>
            <input type="text" name="area" id="area" value= " <?php echo $departamento['area'] ?>">
        </div>
         

           

        
        
       
        
        
    </div>
    <div class="botao">
        <input class="btn-cad" type="submit" value="Salvar">
    </div>
    <a href="departamentos-listar.php">Lista</a> 
 </form>
    </div>
    
  
    
</div>
</main>

</body>

</html>