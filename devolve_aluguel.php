
<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "UPDATE carrinhos SET status='Encerrado' WHERE id='$id'";

if (pg_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Erro: " . pg_last_error($conn);
}
?>
