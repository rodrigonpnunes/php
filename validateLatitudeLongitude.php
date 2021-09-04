<?php
function validateLatitudeLongitude($lat, $long)
    {
        $cont = 0;
        if (preg_match('/^(\-?\d+(\.\d+)?),\s*(\-?\d+(\.\d+)?)$/', $lat)) {$cont++;}
        if (preg_match('/^(\-?\d+(\.\d+)?),\s*(\-?\d+(\.\d+)?)$/', $long)) {$cont++;}
        if ($cont >= 2) {
            return true;
        }
        return false;
    }
?>