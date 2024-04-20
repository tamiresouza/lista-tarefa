<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Visualizar Tarefa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container { margin-top: 2%; }
        .status-concluido { color: green; }
        .status-andamento { color: orange; }
        .status-nao-iniciado { color: red; }
    </style>
</head>
<body>
    <?php include_once('menu.php'); ?>
    <div class="container">
        <h1>Visualizar tarefa</h1>
        <form method="GET">
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="">Todos</option>
                    <option value="Concluído">Concluído</option>
                    <option value="Em andamento">Em andamento</option>
                    <option value="Não iniciado">Não iniciado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Filtrar</button>
        </form>
        <br>
        <h2>Tarefas Encontradas:</h2>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Categoria</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Data/Hora</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'processos/conexao.php';
                $sql = "SELECT t.*, cat.categoria FROM tarefas AS t INNER JOIN categoria AS cat ON t.cod_categoria = cat.id_cat";

                if(isset($_GET['status']) && !empty($_GET['status'])) {
                    $status = $_GET['status'];
                    $sql .= " WHERE t.status = '$status'";
                }

                if(isset($_GET['titulo']) && !empty($_GET['titulo'])) {
                    $tarefa = $_GET['titulo'];
                    $sql .= (isset($_GET['titulo']) && !empty($_GET['titulo'])) ? " AND " : " WHERE ";
                    $sql .= "t.titulo LIKE '%$titulo%'";
                }

                $query_tarefas = $conexao->query($sql);


                if(mysqli_num_rows($query_tarefas) > 0) {

                    while($result_query_tarefas = mysqli_fetch_assoc($query_tarefas)) {
                        $id_tarefa = $result_query_tarefas['id_tarefas'];
                        $categoria = $result_query_tarefas['categoria'];
                        $titulo = $result_query_tarefas['titulo'];
                        $descricao = $result_query_tarefas['descricao'];
                        $data_hora = date('d/m/Y', strtotime($result_query_tarefas['data_realiz'])) . " " . $result_query_tarefas['hora_realiz'];
                        $status_tarefa = $result_query_tarefas['status'];
                        $status_class = '';


                        switch ($status_tarefa) {
                            case 'Concluído':
                                $status_class = 'status-concluido';
                                break;
                            case 'Em andamento':
                                $status_class = 'status-andamento';
                                break;
                            case 'Não iniciado':
                                $status_class = 'status-nao-iniciado';
                                break;
                            default:
                                break;
                        }

                        echo "<tr>";
                        echo "<td>$id_tarefa</td>";
                        echo "<td>$categoria</td>";
                        echo "<td>$titulo</td>";
                        echo "<td>$descricao</td>";
                        echo "<td>$data_hora</td>";
                        echo "<td class='$status_class'>$status_tarefa</td>";
                        echo "</tr>";
                    }
                } else {

                    echo "<tr><td colspan='5'>Nenhuma tarefa encontrada com os filtros fornecidos.</td></tr>";
                }

                mysqli_close($conexao);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
