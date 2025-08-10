<?php

        function retira_indices_arr($p1, $p2){

                $v_vars = [$p1, $p2];

                $t_vars = ["array","string"];

                if(valida_seq_tipo($v_vars, $t_vars)){

                        $a = -1;

                        while(isset($p1[++$a])){

                                if($p1[$a] == $p2){

                                        unset($p1[$a]);

                                }

                        }

                        return $p1;

                }

                else

                        return false;

        }

?>