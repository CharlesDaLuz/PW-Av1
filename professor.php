<?php
/*
Charles da Luz
2019004447
*/
include 'bd.php';
include 'functions.php';
include 'header.php';
echo '<h2>Professor: '.$_GET['prof'].'</h2><table class="table table-hover"><thead  class="thead-dark"><tr><th colspan=4>Informações da(s) disciplina(s) ministrada(s)</th></tr><tr><th>Semestre</th><th>Código</th><th>Disciplina</th><th>Carga-horária</th></tr></thead><tbody>';
$disciplinas=Professor($matriz,$_GET['prof']);
foreach ($disciplinas as $key => $value) {
	echo '<tr><td>'.$value['semestre'].'<td>'.$value['codigo'].'</td><td><a href="disciplina.php?disc='.$value['codigo'].'">'.$value['nome'].'</a></td><td>'.$value['carga-horaria'].'</td></tr>';
}
echo "</tbody></table>";
include 'footer.php';
?>