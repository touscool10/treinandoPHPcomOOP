<?php
    include_once('classes/SalaAula.class.php');
    include_once('classes/Professor.class.php');
    include_once('classes/Aluno.class.php');

    $aluno_1 = new Aluno;
    $aluno_1->NomeAluno = "Matheus";
    $aluno_1->Email = "matheus@gmail.com";

    $aluno_2 = new Aluno;
    $aluno_2->NomeAluno = "Manu";
    $aluno_2->Email = "manu@gmail.com";

    $instrutor = new Professor;
    $instrutor->NomeProfessor = 'José Victor';
    $instrutor->Idade =30;
    $instrutor->Telefone = '23243234';
    $instrutor->Email = 'victor@imediabrasil.com.br';

    $curso = new SalaAula;
    $curso->NomeCurso = 'Curso de Datilografia';
    $curso->Horario ='Manhã';
    $curso->Valor = 100;
    $curso->Professor = $instrutor;
    $curso->Alunos = [$aluno_1, $aluno_2];

    echo "Curso: ".$curso->NomeCurso."<br>";
    echo "Horário: ".$curso->Horario.   "<br>";
    echo "Professor: ".$curso->Professor->NomeProfessor."<br>";

    echo '<pre>';
    print_r($curso->Alunos);
    echo '</pre>';
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Documento sem título</title>
    </head>

    <body>
    </body>
</html>