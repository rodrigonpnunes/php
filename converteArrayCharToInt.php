<?php
function converteTipoArrayCharToInt($arrayL, $key)
    {
        foreach ($arrayL as $keyL => $values) {
            foreach ($values as $keyLL => $valuesL) {
                if (strcmp($key, $keyLL) == 0) {
                    $arrayL[$keyL][$keyLL] = (int) $valuesL;
                }
            }
        }
        return $arrayL;
    }
?>
