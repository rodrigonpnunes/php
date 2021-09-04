<?php
function get_info_browser_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED'])) $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED'])) $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR'])) $ipaddress = $_SERVER['REMOTE_ADDR'];
    else $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function geraHashTokenAcesso($user)
{
    $geral = new Geral();
    $constante = new Constantes();
    $user = $geral->replaceValores($user);
    $geral = null;
    $ipUsuario = get_info_browser_ip();

    $pieceHash = $constante->getHashPiece();
    $constante = null;

    $arqLog = "/tmp/GeraHashTokenAcesso.txt"; //##DEBUG
    $info = "\nIP USUARIO:" . $ipUsuario; //##DEBUG
    $info .= "\nHASH_PIECE:" . $pieceHash; //##DEBUG
    if ((!(strcmp(trim($ipUsuario) , "UNKNOWN") == 0)) && (strlen(trim($ipUsuario)) > 0) && (strlen(trim($pieceHash)) > 0))
    {
        if ((isset($_SERVER['SERVER_SOFTWARE'])) &&
        //(isset($_SERVER['REMOTE_ADDR']))  &&
        (isset($_SERVER['HTTP_USER_AGENT'])))
        {
            $serverP = $_SERVER['SERVER_SOFTWARE'] . $_SERVER['HTTP_USER_AGENT'];
            $hashToken = trim($ipUsuario) . trim($serverP) . $pieceHash;
            $hashToken = hash('ripemd160', $hashToken);
            $info .= "\nSERVER_SOFTWARE:" . $serverP; //##DEBUG
            $info .= "\nHASH_GERADO:" . $hashToken; //##DEBUG
            $info .= "\n------------------------------------\n"; //##DEBUG
            echo "\nHASH_GERADO:" . $hashToken; //##DEBUG
            file_put_contents($arqLog, $info . "\n", FILE_APPEND); //##DEBUG
            return $hashToken;
        }
    }
    file_put_contents($arqLog, $info . "\n", FILE_APPEND); //##DEBUG
    return 0;
}
?>
