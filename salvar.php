<?php
include_once("conexao.php");

//pegar os dados do formulario
$nome = $_POST ['nome'];
$email = $_POST ['email'];

//Comando para inserir alunos no banco
$sql = "INSERT INTO alunos (nome, email) Values ('$nome','$email')";

if (mysqli_query($conn,$sql)) {
    header("Location: lista.php");
    // echo "<h1> Aluno Cadastrado com sucesso! </h1>";
    // echo "<a href= 'index.html'>Voltar</a>";

}
else {
    echo "erro ao cadastrar";
}
?>