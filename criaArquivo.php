<?php    
    function criarArquivo($arquivo, $valor)
    {
        //criamos o arquivo
        //'/var/www/html/vam/API/tmp/banco.txt'
        $arquivo = fopen($arquivo, 'w');
        //verificamos se foi criado
        if ($arquivo == false) {
            die('Não foi possível criar o arquivo.');
        }

        //escrevemos no arquivo
        fwrite($arquivo, $valor);
        //Fechamos o arquivo após escrever nele
        fclose($arquivo);
    }
?>