<?php
$pdo = new PDO("mysql:host=localhost;dbname=banco_de_dados", "usuario", "senha");
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = ?");
$stmt->execute([$username]);
