<?php
/*
Charles da Luz
2019004447
*/
include 'header.php';
include 'bd.php';
include 'functions.php';
echo '<h2>Resultado:</h2><h4>Termo buscado: '.$_POST['busca'].'</h4>';
echo busca($matriz,$_POST['busca']);
include 'footer.php';
?>