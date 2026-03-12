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
    <header><h1>CADASTRO - Departamentos</h1>
 <nav>

            <ul>
                <li><a href="">listagem</a></li>
                <li><a href="chamados.php">chamados</a></li>
                <li><a href="funcionarios.php">Funcionarios Cadastrar</a></li>
                <li><a href="empresas.php">Empresas Cadastrar</a></li>
            </ul>

        </nav>
    </header>
    <main>
    <div id="container">
    <h1>Cadastro de Departamento</h1> 
    <form action="backend/departamento-cadastrar.php" method="POST">
        <div class="areas">
        <div>
            <label for="departamento">Departamento</label>
            <input type="text" name="nome" id="nome">
        </div>
            <div>
            <label for="area">Area</label>
            <input type="text" name="area" id="area">
        </div>
    </div>
        
    <div class="botao">
      <input class="btn-cad" type="submit" value="Cadastrar">
      </div>
      <a href="departamentos-listar.php">Lista</a>
    </form>
    
</div>
</main>
</body>

</html>