<?php
/*
Charles da Luz
2019004447
*/
echo '<html>
		<head>
			<meta charset="UTF-8"/>
			<title>Tecnologia em Sistemas para Internet | IFC - Campus Camboriú</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
  			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  			<style>
				.jumbotron {
  					background-color: #28a745;
 					color: #fff;
  					padding: 10px 25px;
				}
				hr {
					border: 2px solid red;
  					border-radius: 5px;
        }
        footer .glyphicon {
          font-size: 20px;
          margin-bottom: 20px;
          color: #fff;
        }
			</style>
		</head>
		<body>
    <a id="topo"></a>';
echo '<div class="jumbotron">
<div class="container-fluid">
	<div class="row">
    	<div class="col-sm-4 text-center">
      		<img src="logo-ifc.png" alt="IFC" width="306" height="84"> 
    	</div>
    	<div class="col-sm-8">
    		<h3>Tecnologia em Sistemas para Internet</h3>
    		<p>Matriz curricular</p>
    	</div>
	</div>
</div>
</div><hr>';
include 'buscador.php';
echo '<div class="container">';
?>