<?php

$conn = new PDO("mysql:host=local;dbname=cadastro", 'root', '');

$idade = '18';
$nome = 'Layssa';
$stmt = $conn->prepare("SELECT nome, idade FROM usuario WHERE idade : :idade AND nome = :nome");

$stmt ->bindValue(':idade', $idade);
$stmt ->bindValue(':nome', $nome);

$stmt->execute();