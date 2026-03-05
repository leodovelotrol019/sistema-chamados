<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cadastros.css">
    <title>Sistema Chamados - Empresas</title>
</head>

<body>
    <header><h1>CADASTRO - EMPRESAS</h1></header>
    <main>
    <div id="container">
    <h1>Cadastro de Empresas</h1> 
    <form action="backend/empresas-cadastrar.php" method="POST">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
            <div>
            <label for="area">Area</label>
            <input type="text" name="area" id="area">
        </div>
        <div>
            <label for="responsavel">Responsavel</label>
            <input type="text" name="responsavel" id="responsavel">
        </div>
        <div>
            <label for="">E-mail</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">
        </div>
    
        
    </form>
    <input class="btn-cad" type="submit" value="Cadastrar">
</div>
</main>
</body>

</html>