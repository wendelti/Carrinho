<?php
$host = "ep-white-voice-a4j8zxtv-pooler.us-east-1.aws.neon.tech";
$dbname = "verceldb";
$username = "default";
$password = "eMSh3qrVAGK2";

// Conectar ao banco de dados
$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

// Verificar conexão
if (!$conn) {
    die("Falha na conexão: " . pg_last_error());
}
?>
