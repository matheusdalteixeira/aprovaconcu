<?php
                if(!file_exists("questoes")){

                        echo PHP_EOL."pasta -questoes- não existe;";

                        if(!mkdir("questoes")){

                                echo PHP_EOL."erro desconhecido ao tentar criá-la";

                                exit;

                        }

                        else

                                echo PHP_EOL."criada com sucesso";

                }
?>