<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cadastros.css">
    <link rel="stylesheet" href="assets/css/style.css"> 
    <title>Sistema Chamados - Empresas</title>
</head>

<body>
    <header><h1>CADASTRO - EMPRESAS</h1>
 <nav>

            <ul>
                <li><a href="">listagem</a></li>
                <li><a href="chamados.php">chamados</a></li>
                <li><a href="funcionarios.php">Funcionarios Cadastrar</a></li>
                <li><a href="departamentos.php">Departamendo Cadastrar</a></li>
                
            </ul>

        </nav>
    </header>
    <main>
    <div id="container">
    <h1>Cadastro de Empresas</h1> 
    <form action="backend/empresas-cadastrar.php" method="POST">
     <div class="areas ">
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
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">
        </div>
    </div>
        
        <div class="botao">
    <input class="btn-cad" type="submit" value="Cadastrar">

    </div>
    <a href="empresas-listar.php">lista</a>
    </form>
    
</div>
</main>
</body>

</html>