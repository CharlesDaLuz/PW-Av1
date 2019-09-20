<?php
/*
Charles da Luz
2019004447
*/
include 'bd.php';
include 'functions.php';
include 'header.php';
$disciplina=CodDisc($matriz,$_GET['disc']);
echo '<table class="table"><thead class="thead-dark"><tr><th colspan=2>Informações da disciplina</th></tr></thead><tbody><tr><td>Código:</td><td>'.$disciplina['codigo'].'</td></tr><tr><td>Nome:</td><td>'.$disciplina['nome'].'</td></tr><tr><td>Semestre:</td><td>'.$disciplina['semestre'].'</td></tr><tr><td>Carga-horária:</td><td>'.$disciplina['carga-horaria'].'</td></tr><tr><td>Professor(es):</td><td>';
foreach ($disciplina['professor'] as $key => $value) {
	if ($key>0)
		echo ' / ';
	echo '<a href="professor.php?prof='.$value.'">prof. '.$value.'</a>';
	}
echo "</td></tr></tbody></table>";
include 'footer.php';
?>