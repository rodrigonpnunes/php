<?php
function verificaLatenciaIp($ip)
    {
        $latencia = -1;
        $retorno = false;
        exec("ping -W 2 " . $ip . " -c 1", $output, $result);
        if (($result === 0) && (count($output) >= 1)) {
            $piece = explode(":", $output[1]);
            if (count($piece) >= 1) {
                $lt = explode("=", $piece[1]);
                if (count($lt) >= 1) {
                    $latencia = str_replace("\"", "", $lt[3]);
                    $latencia = trim($latencia, " ms");
                    return $latencia;
                }
            }
        }
        return $latencia;
    }
?>