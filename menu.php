<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Aplicação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #C5D0D7; /* Azul claro para o fundo */
        }

        .navbar {
            background-color: #2F617F; /* Azul escuro para a barra de navegação */
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #ffffff; /* Texto branco */
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #e9ecef; /* Texto branco quando hover */
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff; /* Fundo branco para as tabelas */
        }

        .table th, .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #dddddd; /* Linha de separação entre as linhas */
        }

        .table th {
            background-color: #2F617F; /* Fundo azul escuro para cabeçalhos */
            color:#ffffff
        }

        .table tbody tr:hover {
            background-color: #f9f9f9; /* Destaque ao passar o mouse sobre as linhas */
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="cadastrar-tarefa.php">Cadastrar Tarefa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="visualizar-tarefa.php">Visualizar Tarefas</a>
                    <a class="nav-link active" href="cadastrar-categoria.php">Cadastrar Categoria</a>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


