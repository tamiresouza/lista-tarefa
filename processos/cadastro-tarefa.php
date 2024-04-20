<?php
include('conexao.php');


$categoria = $_POST['categoria'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$status = $_POST['status'];
$descricao = $_POST['descricao'];
$titulo = $_POST['titulo'];


$sql = "INSERT INTO tarefas (cod_categoria, data_realiz, hora_realiz, status, descricao, titulo) VALUES ('$categoria', '$data', '$hora', '$status', '$descricao', '$titulo')";
$query_sql = mysqli_query($conexao, $sql);   
if (mysqli_affected_rows($conexao) > 0) {
    echo '<script language="javascript">alert("Cadastro realizado com sucesso.")</script>';
    echo '<script language="javascript">window.location="../visualizar-tarefa.php"</script>'; 
} else {
    echo '<script language="javascript">alert("Ocorreu um erro.")</script>';
    echo '<script language="javascript">window.history.back();</script>';
}
mysqli_close($conexao);
?>

