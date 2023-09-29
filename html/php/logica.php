<?php

include('conexao.php');

  if($_SERVER["REQUEST_METHOD"] == "POST") {
     $email = $_POST['email'] ;
     $NomeCompleto = $_POST['nome'] ;
     $Email = $_POST['email'] ;
     $Telefone = $_POST['telefone'] ;
     $Sexo = $_POST['genero'];
     $DatadeNascimento = $_POST['data_nascimento'];
     $Cidade = $_POST['cidade'];
     $Estado = $_POST['estado'];
     $Endereco = $_POST['endereco'];
     

     $busca = "INSERT INTO `usuarios`(`Nome completo`, `Email`, `Telefone`, `Sexo`, `data de nascimento`, `Cidade`, `Estado`, `Endereço`) VALUES ('$NomeCompleto', '$email', '$Telefone', '$Sexo', '$DatadeNascimento', '$Cidade',  '$Estado', '$Endereco')";
    $query = mysqli_query($conexao, $busca);
    ECHO "Parabéns, foi cadastrado com sucesso!! Agora enviaremos um e-mail com as nossas novidades!";

  }