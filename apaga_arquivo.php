<?php

function apaga_arquivo($p){

        global $v_vars, $t_vars;

        $v_vars = [$p];

        $t_vars = ["string"];

        $msg = PHP_EOL."Arquivo {$p} ";

        if(

                valida_seq_tipo($v_vars, $t_vars)       &&

                file_exists($p)                         &&

                unlink($p)

        ){

                echo PHP_EOL.$msg."deletado com sucesso";

                return true;

        }

        else{

                echo PHP_EOL.$msg."não deletado";

                return false;

        }

}

?>
