<?php
function converteTipoArrayCharToBool($arrayL, $key)
   {
       foreach ($arrayL as $keyL => $values) {
           foreach ($values as $keyLL => $valuesL) {
               if (strcmp($key, $keyLL) == 0) {
                   if ((strcmp("t", trim($valuesL)) == 0) ||
                       (strcmp("1", trim($valuesL)) == 0)) {
                       $arrayL[$keyL][$keyLL] = 1;
                   } else {
                       $arrayL[$keyL][$keyLL] = 0;
                   }
               }
           }
       }
       return $arrayL;
    }
?>
