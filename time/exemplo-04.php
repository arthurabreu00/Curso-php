<?php
    $dt = new DateTime();

    date_default_timezone_set("America/Sao_Paulo");
    
    setlocale(LC_ALL,"pt_BR.utf-8","pt_BR","portuguese");

    echo $dt -> format('d/m/y H:i:s');
?>