<?php
  if(isset($_POST['submit'])){
    $aprovados = array();
    $reprovados = array();
    foreach ($_POST['alunos'] as $aluno) {
      $nome = $aluno['nome'];
      $nota1 = $aluno['nota1'];
      $nota2 = $aluno['nota2'];
      $media = ($nota1 + $nota2) / 2;
      $aluno['media'] = $media;
      if ($media >= 6) {
        $aprovados[] = $aluno;
      } else {
        $reprovados[] = $aluno;
      }
    }
    echo "<p>Lista de aprovados:</p>";
    echo "<ul>";
    foreach ($aprovados as $aluno) {
      echo "<li>{$aluno['nome']} - Média: {$aluno['media']}</li>";
    }
    echo "</ul>";
    echo "<p>Lista de reprovados:</p>";
    echo "<ul>";
    foreach ($reprovados as $aluno) {
      echo "<li>{$aluno['nome']}</li>";
    }
    echo "</ul>";
  }
?>