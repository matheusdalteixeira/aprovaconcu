<?php

        function input_term($p){

                $v_vars = [$p];

                $t_vars = ["string"];

                if(valida_seq_tipo($v_vars, $t_vars))

                        return readline(PHP_EOL.$p);

                else

                        return false;

        }

?>