<?php
function montaTabelaHtmlSimples($coluna, $separador, $vector)
    {
        $htmlTable = "<div class=\"table-items\"><div class=\"table-header\">$coluna</div>";
        $piece = explode($separador, $vector);
        if (count($piece) > 0) {
            foreach ($piece as $key => $value) {
                if (strlen(trim($value)) > 0) {
                    $htmlTable .= "<div class=\"item\">";
                    $htmlTable .= $value . "</div>";
                }
            }
        }
        $htmlTable .= "</div>";
        return $htmlTable;
    }
?>