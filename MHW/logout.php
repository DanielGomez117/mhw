<?php
    session_start();
    session_unset();
    echo 'Has cerrado la sesión. Redireccionando...';
    echo "<html><META HTTP-EQUIV='refresh' 
    content='2;URL=login.php'></html>";
    session_destroy();
    
?>