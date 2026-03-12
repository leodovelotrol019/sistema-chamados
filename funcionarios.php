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
    <header><h1>CADASTRO - FUNCIONÁRIOS</h1>
 <nav>

            <ul>
                <li><a href="">listagem</a></li>
                <li><a href="chamados.php">chamados</a></li>
            
                <li><a href="departamentos.php">Departamendo Cadastrar</a></li>
                <li><a href="empresas.php">Empresas Cadastrar</a></li>
            </ul>

        </nav>
</header>
    <main>
    <div id="container">
    <h1>Cadastro de Funcionários</h1>
    <form action="backend/fucionarios-cadastrar.php" method="POST">
        <div>
            <div class="areas">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="">E-mail</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">
        </div>
        <div>
            <label for="departamento">Departamendo</label>
            <select name="departamento" id="departamento">
                <option value="" disabled selected>Selecione...</option>
                <option value="Suporte">Suporte</option>
                <option value="Desenvolvimento">Desenvolvimento</option>
                <option value="Adiministrativo">Adiministrativo</option>

            </select>
        </div>
    </div>
    </div>
    <div class="botao">
        <input class="btn-cad" type="submit" value="Cadastrar">
    </div>
    <a href="funcionarios-listar.php">Lista</a>
    </form>
    
</div>
</main>
</body>

</html>