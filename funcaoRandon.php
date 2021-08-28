<?php
function foiMordido(){
 return rand(0,1);
}

$msg="Joaozinho mordeu o seu dedo!";
if (!(foiMordido())) {
    $msg="Joaozinho NAO mordeu o seu dedo !";
}
echo '
<!DOCTYPE html>
<html>
<head>
<title>Joaozinho</title>
</head>
<body>

<h1>Mensagem</h1>
<p>'. $msg .'</p>

</body>
</html>
';
?>