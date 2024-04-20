<?php
    include('conexao.php');

    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO categoria (categoria) VALUES ('$categoria')";
    $query = mysqli_query($conexao, $sql);
    if ($query && mysqli_affected_rows($conexao) > 0) {
        echo '<script language="javascript">alert("Categoria cadastrada com sucesso.")</script>';
        echo '<script language="javascript">window.location="../cadastrar-categoria.php"</script>';
    } else {
        echo '<script language="javascript">alert("Ocorreu um erro ao cadastrar a categoria.")</script>';
        echo '<script language="javascript">window.history.back();</script>';
    }
    mysqli_close($conexao);
?>
