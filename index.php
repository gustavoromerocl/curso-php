<?php
    ##Configurando el entorno
    echo 'hola ', 'mundo ';
    print 'Hola mundo con print';
    
    //Niveles de error
    // Parsed error - Fatal error - Notice error
    //Custom error
    trigger_error("Error al escribir", E_USER_ERROR);
?>