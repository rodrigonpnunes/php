<?php
 function converteTipoArrayCharToFloat($arrayL, $key)
    {
        foreach ($arrayL as $keyL => $values) {
            foreach ($values as $keyLL => $valuesL) {
                if (strcmp($key, $keyLL) == 0) {
                    $arrayL[$keyL][$keyLL] = number_format($valuesL, 2, '.', '');
                }
            }
        }
        return $arrayL;
    }
    ?>