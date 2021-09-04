<?php
function validaIp($ip)
    {
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
            return true;
        }

        return false;
    }
?>