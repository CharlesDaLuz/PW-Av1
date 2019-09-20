<?php
echo '<div class="jumbotron text-center">
		<form action="busca.php" method="post" class="navbar-form" role="search" onsubmit="return valida()">
			<div class="form-group"><label for="busca">Buscar:</label>
				<input type="text" id="busca1" name="busca" class="form-control input-sm" placeholder="Digite aqui...">
			</div>
			<button type="submit" class="btn btn-default btn-md"><span class="glyphicon glyphicon-search"></span> </button>
		</form>
		<script>
		function valida() {
			var vazio = document.getElementById("busca1").value;
			if (vazio == ""){
				alert("Por favor, digite um valor a ser buscado!");
				return false;
			}
		}
		</script>
	</div>';
?>