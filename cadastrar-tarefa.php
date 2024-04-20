<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <title>Cadastrar tarefa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container { margin-top: 2%; }
    </style>
    </style>
</head>
<body>
    <?php include_once('menu.php'); ?>
    <div class="container">
		<h1>Cadastrar tarefa</h1>
        <div class="corpo">
            <form method="POST" action="processos/cadastro-tarefa.php">
            <div class="row">
                    <div class="col-md">
                        <label>*Titulo</label>
                        <textarea class="form-control form-control-sm" rows="1" required="" name="titulo"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label>*Categoria</label>
                        <select class="form-select form-select-sm" required="" name="categoria">
                            <option></option>
                            <?php
                            include_once 'processos/conexao.php';
                            $query_cat = $conexao->query("SELECT * FROM categoria ORDER BY categoria ASC");
                            while ($result_cat = mysqli_fetch_assoc($query_cat)) {
                                echo '<option value="' . $result_cat['id_cat'] . '">' . $result_cat['categoria'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md">
                        <label>*Data</label>
                        <input class="form-control form-control-sm" type="date" required="" name="data">
                    </div>
                    <div class="col-md">
                        <label>*Hora</label>
                        <input class="form-control form-control-sm" type="time" required="" name="hora">
                    </div>
                    <div class="col-md">
                        <label>*Status</label>
                        <select class="form-select form-select-sm" required="" name="status">
                            <option value="Não iniciado">Não iniciado</option>
                            <option value="Em andamento">Em andamento</option>
                            <option value="Concluído">Concluído</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label>*Descrição da tarefa a ser realizada</label>
                        <textarea class="form-control form-control-sm" rows="5" " required="" name="descricao"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
