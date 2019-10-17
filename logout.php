<?php
session_start();
session_destroy();
header('location: login.html');
/** ao clicar no "logout" na pagina principal destroí-se a sessão criada */
