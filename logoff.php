<?php

session_start();


//remover indices do array de sessao
//unset()



//destruir a variavel da sessao
//session_destroy()
session_destroy();
header('location: index.php');
