<?php

$conn = new PDO("mysql:host=localhost;dbname=db_sistema_chamados","root","",);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "conexão realizada com secesso";

$sql = "SELECT  id, assunto,prioridade FROM tb_chamados";
$chamados = $conn->query($sql);
foreach ($chamados as $chamado) {
// echo "<br>ID:".  $chamado[ 'id']; 
// echo "<br>Assunto:". $chamado[ 'assunto']; 
// echo   "<br>Prioridade:". $chamado[ 'prioridade'];
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>chamados</title>
</head>
<body>
    <main>
        <h1>Listagem de Chamados</h1>
    </main>
</body>
</html>