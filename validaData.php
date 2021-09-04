<?php
function validaData($dat)
    {

        if (strstr($dat, '-')) {

            $data = explode("-", "$dat");

            if (empty($data[2]) || empty($data[1]) || empty($data[0])) {
                return 0;
            }

            $d = $data[2];
            $m = $data[1];
            $y = $data[0];
            // verifica se a data é válida!
            // 1 = true (válida)
            // 0 = false (inválida)
            $res = checkdate($m, $d, $y);
            return $res;
        } else {
            return 0;
        }

    }
?>