function cortarTexto( $texto, $numMaxCaract ){
    if (strlen($texto) <  $numMaxCaract){
        $textoCortado = $texto;
    }else{
        $textoCortado = substr($texto, 0, $numMaxCaract);
        $ultimoEspacio = strripos($textoCortado, " ");

        if ($ultimoEspacio !== false){
            $textoCortadoTmp = substr($textoCortado, 0, $ultimoEspacio);
            if (substr($textoCortado, $ultimoEspacio)){
                $textoCortadoTmp .= '...';
            }
            $textoCortado = $textoCortadoTmp;
        } elseif (substr($texto, $numMaxCaract)){
                $textoCortado .= '...';
        }
    }
    return $textoCortado;
}



/* Ejemplo de uso */
$texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pretium velit vel eros rutrum, quis posuere tellus imperdiet. Vestibulum vehicula erat quis eleifend blandit. In sodales eleifend nisl non dapibus. Vestibulum congue eros et felis maximus auctor nec sit amet dolor. Mauris et tincidunt velit. Cras imperdiet sed nisl vitae elementum. Nulla id augue nisl. Pellentesque nulla nunc, maximus vitae rhoncus vitae, ornare et magna. Vestibulum ut quam at quam lacinia finibus at ut lorem. Aliquam finibus arcu non sapien pellentesque auctor.";

cortarTexto ( $texto, $50 );