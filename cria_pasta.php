<?php
        function cria_pasta($p){
                if(!mkdir("pasta")){
                        echo PHP_EOL."erro na criação da pasta {$p}";
                        return false;
                }
                return true;
        }
?>