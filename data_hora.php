<?PHP

        function data($p1, $p2){

                $fuso = date_default_timezone_set($p1);

                $tempdata = date($p2);

                return date($p2);

        }

?>