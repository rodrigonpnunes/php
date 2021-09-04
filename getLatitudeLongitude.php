<?php
function getLatitudeLogintudeLocal($estado, $cidade)
    {
        $json_file = file_get_contents("municipios_brasileiros.json");
        $retorno = "0|0";
        $mEstado1 = strtoupper(self::tirarAcentos(trim($estado)));
        $mCidade1 = strtoupper(self::tirarAcentos(trim($cidade)));
        $mCidade1 = str_replace('`\'', ' ', $mCidade1);
        $mEstado1 = str_replace('`\'', ' ', $mEstado1);

        $json_str = json_decode($json_file, true);
        foreach ($json_str as $registro) {
            $mCidade2 = strtoupper(self::tirarAcentos(trim($registro["nome_municipio"])));
            $mEstado2 = strtoupper(self::tirarAcentos(trim($registro["uf"])));
            $mCidade2 = str_replace('`\'', ' ', $mCidade2);
            $mEstado2 = str_replace('`\'', ' ', $mEstado2);

            // $info="\nCidade:". $mCidade1 . ":" . $mCidade2 . "  Estado:" .$mEstado1 . ":" . $mEstado2;
            // file_put_contents("chegou2.txt", $info);
            if ((strcmp($mCidade1, $mCidade2) == 0) && (strcmp($mEstado1, $mEstado2) == 0)) {
                $retorno = $registro["latitude"] . "|" . $registro["longitude"];
                break;
            }
        }

        return $retorno;
    }
?>