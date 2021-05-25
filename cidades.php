<?php
	
	if($_SERVER['REQUEST_METHOD'] == "GET"){

		$estado = $_GET['estado'];

		if ($estado == "RJ" || $estado == "rj")
    		{
	        	echo '{"estado": ["Rio de Janeiro", "Niteroi", "Angra", "Caxias"]} ';
		}
		else
		{
		      if ($estado == "SP" || $estado == "sp")
		      {
		      	echo '{"estado": ["Sao Paulo", "Guarulhos", "Jundiai", "Campinas"]} ';
		      }
		      else
		      {
			 echo '{"estado": ["Vazio"]} ';
		      	//echo "Voce inseriu um estado invalido!! ";
		      }
		}	
		
	}
	
?>
