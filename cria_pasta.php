<?php

        function cria_pasta($p){

                $v_vars = [$p];

                $t_vars = ["string"];

                if(valida_seq_tipo($v_vars, $t_vars)){

                        if(!file_exists($p)){

                                echo PHP_EOL."pasta -{$p}- não existe;";

                                if(!mkdir($p)){

                                        echo PHP_EOL."erro desconhecido ao tentar criá-la";

                                        return false;

                                }

                                else{

                                        echo PHP_EOL."criada com sucesso";

                                        return true;

                                }

                        }

                }

                else{

                        echo PHP_EOL."erro de tipo passado como parâmetro para essa função";

                        echo PHP_EOL."corrija o tipo {$p}";

                        return false;

                }

        }

?>