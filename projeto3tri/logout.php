<?php
//iniciar a session
session_start();
//destruir a session
session_destroy();
//redirecionar para a pagina do formulario de login
echo ('<meta http-equiv="refresh" content="0;url=listaProfessores.php">');