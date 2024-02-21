<?php

// $hostname = 'localhost';
// $database = 'to_do_list';
// $username = admin;
// $password = 'admin';

try {
    $pdo = new PDO("pgsql:host=localhost;dbname=to_do_list", 'postgres', 'admin');
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
