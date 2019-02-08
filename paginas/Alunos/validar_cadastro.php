<?php
    session_start();
    require_once "../../fun/init.php";
    $conect = db_connect();

    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $gender = $_POST['gender'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $pais = $_POST['pais'];

    $sql = "INSERT INTO alunos (nome, matricula, gender, cpf, nascimento, email, telefone, pais) VALUES (:nome, :matricula, :gender, :cpf, :nascimento, :email, :telefone, :pais)";

    $stmt_2 = $conect->prepare($sql);
    $stmt_2->bindValue(':nome',$_POST['nome']);
    $stmt_2->bindValue(':matricula',$_POST['matricula']);
    $stmt_2->bindValue(':gender',$_POST['gender']) ;
    $stmt_2->bindValue(':cpf',$_POST['cpf']);
    $stmt_2->bindValue(':nascimento',date('y-m-d'));
    $stmt_2->bindValue(':email',$_POST['email']);
    $stmt_2->bindValue(':telefone',$_POST['telefone']);
    $stmt_2->bindValue(':pais',$_POST['pais']);

    $stmt_2->execute();
    // $stmt_2->bindValue(':debit',$fileNome);
        
    echo "&lt;script>alert('Aluno cadastrado com sucesso!');</script>";
    
    header ("Location: aluno_criar.php");

