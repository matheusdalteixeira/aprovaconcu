<?php

function apaga_arquivo($p){

	global $v_vars, $t_vars;
	
	$v_vars = [$p];
	
	$t_vars = ["string"];

	if(

		valida_seq_tipo($v_vars, $t_vars) 	&&

		file_exists($p)				&&

		unlink($p)

	)

		echo PHP_EOL."Arquivo {$p} deletado com sucesso";

	else

		return false;

}

?>
