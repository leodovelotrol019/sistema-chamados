<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cadastros.css">
    <title>Sistema Chamados - Funcionários</title>
</head>

<body>
    <header><h1>CADASTRO - FUNCIONÁRIOS</h1></header>
    <main>
    <div id="container">
    <h1>Cadastro de Funcionários</h1>
    <form action="backend/fucionarios-cadastrar.php" method="POST">
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
        
    </form>
    <input class="btn-cad" type="submit" value="Cadastrar">
</div>
</main>
</body>

</html>