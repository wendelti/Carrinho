
<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda dos Carrinhos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Agenda dos Carrinhos</h1>
    <a href="add_aluguel.php" class="btn btn-primary mb-3">Adicionar Aluguel</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Número</th>
                <th>Alugado Por</th>
                <th>Local</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT carrinhos.*, locais.nome AS local_nome FROM carrinhos INNER JOIN locais ON carrinhos.local = locais.id WHERE carrinhos.status = 'Alugado'";
        $result = pg_query($conn, $sql);

        if (pg_num_rows($result) > 0) {
            while ($row = pg_fetch_assoc($result)) {
                echo "<tr>
                    <td>" . $row['numero'] . "</td>
                    <td>" . $row['alugadoPor'] . "</td>
                    <td>" . $row['local_nome'] . "</td>
                    <td>
                        <a href='edit_aluguel.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Editar</a>
                        <a href='devolve_aluguel.php?id=" . $row['id'] . "' class='btn btn-success btn-sm'>Devolver</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum aluguel encontrado</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
