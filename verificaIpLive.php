<?php
    function verificaIpLive($ip)
    {
        exec("ping -W 2 " . $ip . " -c 1", $output, $result);
        if (($result === 0) && (count($output) >= 1)) {
            return true;
        }
        return false;
    }
?>