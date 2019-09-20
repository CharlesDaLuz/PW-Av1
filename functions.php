<?php
/*
Charles da Luz
2019004447
*/
function DiscSem($matriz,$a){
	$num=0;
	if ($a==0) {
		$num=sizeof($matriz);
	}
	else{
		foreach ($matriz as $value) {
			if ($value['semestre']==$a) {
				$num++;
			}
		}
	}
	return $num;
}

function CargaSem($matriz,$a){
	$num=0;
	if ($a==0) {
		foreach ($matriz as $value) {
			$num+=$value['carga-horaria'];
		}
	}
	else{
		foreach ($matriz as $value) {
			if ($value['semestre']==$a) {
				$num+=$value['carga-horaria'];
			}
		}
	}
	return $num;
}

function CodDisc($matriz,$a){
	foreach ($matriz as $key => $value) {
		if ($value['codigo']==$a) {
			return $value;
		}
	}
}

function Professor($matriz,$a){
	$lista = array();
	foreach ($matriz as $value) {
		foreach ($value['professor'] as $value2) {
			if ($value2==$a) {
				$lista[]=$value;
			}
		}
	}
	return $lista;
}

function curso($disciplinas){
	$html='<table class="table table-hover">';
	$semestre=0;
	foreach ($disciplinas as $disciplina) {
		if ($disciplina['semestre']!=$semestre) {
			if ($semestre!=0) {
				$html=$html.'<tr class="active"><td colspan=4>Total: '.DiscSem($disciplinas,$disciplina['semestre']).' disciplinas, '.CargaSem($disciplinas,$disciplina['semestre']).' horas</td></tr>';
			}
			$semestre=$disciplina['semestre'];
			$html=$html.'<tr class="info"><td colspan=4><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><b> Semestre '.$semestre.'</b></td></tr>';
		}
		$html=$html.'<tr><td>'.$disciplina['codigo'].'</td><td><a href="disciplina.php?disc='.$disciplina['codigo'].'">'.$disciplina['nome'].'</a></td><td>'.$disciplina['carga-horaria'].' horas</td><td>';
		foreach ($disciplina['professor'] as $key => $value) {
			if ($key>0)
				$html=$html.' / ';
			$html=$html.'<a href="professor.php?prof='.$value.'">Prof. '.$value.'</a>';
		}
		$html=$html.'</td></tr>';
	}
	$html=$html.'<tr class="active"><td colspan=4>Total: '.DiscSem($disciplinas,$disciplina['semestre']).' disciplinas, '.CargaSem($disciplinas,$disciplina['semestre']).' horas</td></tr>';
	$html=$html.'<tr class="success"><td colspan=4><b>Total do Curso: '.DiscSem($disciplinas,0).' disciplinas, '.CargaSem($disciplinas,0).' horas</td></tr></table>';
	return $html;
}

function busca($matriz,$termo){
	$html='<table class="table table-condensed table-hover">';
	$total=0;
	foreach ($matriz as $disciplina) {
		if (!(stripos($disciplina['nome'],$_POST['busca'])===false)){
			$html=$html.'<tr><td><a href="disciplina.php?disc='.$disciplina['codigo'].'">'.$disciplina['nome'].'</a></td></tr>';
			$total++;
		}
		foreach ($disciplina['professor'] as $key => $value){
			if (!(stripos($value,$_POST['busca'])===false)){
				$html=$html.'<tr><td><a href="professor.php?prof='.$value.'">Prof. '.$value.'</a></td></tr>';
				$total++;
			}
		}
	}
	$html=$html.'</table><div class="alert alert-success"><p>Total de '.$total.' ocorrências.</p></div>';
	if ($total==0) {
		$html='<div class="alert alert-danger"><p>Nenhuma ocorrência.</p></div>';
	}
	return $html;
}
?>