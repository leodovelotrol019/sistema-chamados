<?php
//arquivo de conexão do PHP com MYSQL usando o PDO
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('BANCO', 'db_sistema_chamados');

try {
    $conexao = new PDO("mysql:host=" . SERVIDOR . ";dbname=" . BANCO . ";charset=utf8", USUARIO, SENHA);

    $conexao->setATTribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado com Sucesso!"
} catch (PDOException $erro) {
    echo "Erro ao conectar no banco de dados " . $erro;
}
