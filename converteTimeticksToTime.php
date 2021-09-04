<?php
function timeticks_convert($timeticks)
    {
        if ($timeticks <= 0) {$ConvertSeconds = "0 Dias - 0 h - 0 m - 0 s";
        } else {
            $lntSecs = intval($timeticks / 100);
            $intDays = intval($lntSecs / 86400);
            $intHours = intval(($lntSecs - ($intDays * 86400)) / 3600);
            $intMinutes = intval(($lntSecs - ($intDays * 86400) - ($intHours * 3600)) / 60);
            $intSeconds = intval(($lntSecs - ($intDays * 86400) - ($intHours * 3600) - ($intMinutes * 60)));
            $ConvertSeconds = "$intDays Dias - $intHours h - $intMinutes m - $intSeconds s";
        }
        return $ConvertSeconds;
    }
?>