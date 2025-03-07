<?php

class CadastroAlunos {
    private $alunos = [];

    public function cadastrarAluno(Aluno $aluno) {
        $this->alunos[] = $aluno;
    }

    public function listarAlunos() {
        foreach ($this->alunos as $aluno) {
            echo "Nome: " . $aluno->getNome() . ", Matrícula: " . $aluno->getMatricula() . ", Curso: " . $aluno->getCurso() . "<br>";
        }
    }
}