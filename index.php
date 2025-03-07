<?php
    require_once 'classes/CadastroAluno.php';
    require_once 'classes/Aluno.php';

    $aluno1 = new Aluno ("Marcos", "123123", "Engenharia de Software");
    $aluno2 = new Aluno ("Maria", "2123213", "Engenharia de Software");

    $cadastro = new CadastroAlunos();

    $cadastro->cadastrarAluno($aluno1);
    $cadastro->cadastrarAluno($aluno2);

    $cadastro->listarAlunos();
?>