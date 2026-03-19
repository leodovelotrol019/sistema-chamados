<?php

// adicionar o arquivo de conexão
require_once 'backend/conexao.php';

try{
$id = $_GET['id'];
$sql = "SELECT * FROM tb_funcionarios WHERE id = $id";
$comando = $conexao->prepare($sql);
$comando->execute();


//guarda os dados do usuario em um array
$funcionario = $comando->fetch(PDO::FETCH_ASSOC);
}
catch(PDOException $erro){
echo 'Erro ao buscar os dados:';$erro->getMessage();
}



?>






<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cadastros.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sistema Chamados - Funcionários</title>
</head>

<body>
    
 <nav>
<header><h1>EDITAR - FUNCIONÁRIOS</h1>
            <ul>
                
            
                <li><a href="funcionarios-listar.php">Voltar</a></li>
                
            </ul>

        </nav>
</header>
    <main>
    <div id="container">
    <h1>Funcionários - Editar</h1>
    <form action="backend/fucionarios-atualizar.php" method="POST">
        
        
            <div class="areas">
 <div>
            <label for="id">ID</label>
            <input type="text" name="id" id="id" value="<?php echo $funcionario['id'] ?>" readonly>
        </div>

        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $funcionario['nome'] ?>">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" value=" <?php echo $funcionario['email'] ?>">
        </div>
        <div>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" value= " <?php echo $funcionario['telefone'] ?>">
        </div>
        <div>
            <label for="departamento">Departamento</label>
            <select name="departamento" id="departamento">
                <option value="" disabled selected>Selecione...</option>
                <option value="Suporte" <?php if ($funcionario['departamento'] == 'Suporte') echo 'selected ';?>>Suporte</option>
                <option value="Desenvolvimento" <?php if ($funcionario['departamento'] == 'Desenvolvimento') echo 'selected ';?>>Desenvolvimento</option>
                <option value="Adiministrativo" <?php if ($funcionario['departamento'] == 'Adiministrativo') echo 'selected ';?>>Adiministrativo</option>

            </select>
        </div>
    </div>
    <div class="botao">
        <input class="btn-cad" type="submit" value="Salvar">
    </div>
    <a href="funcionarios-listar.php">Lista</a>
    </div>
    
    </form>
    
</div>
</main>
<script src="assets/js/inputmask.js"></script>
 
<script>
    var telefone = document.getElementById('telefone');
 
    var im = new Inputmask({
        mask: [
            "(99) 9999-9999",   // fixo
            "(99) 99999-9999"   // celular
        ],
        keepStatic: true
    });
 
    im.mask(telefone);
</script>
</body>

</html>