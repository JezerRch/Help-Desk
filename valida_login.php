<?php

session_start();

//variavel que verifica se a autenticacao foi realizada
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(1 => 'Administrativo', 2 => 'Usuario');


//usuarios do sistema

$usuarios_app = array(
  array('id' => 1, 'email' => 'adm@teste.com', 'senha' => '1234', 'perfil_id' => 1),
  array('id' => 2, 'email' => 'user@teste.com', 'senha' => '1234', 'perfil_id' => 1),
  array('id' => 3, 'email' => 'jezer@teste.com', 'senha' => '1234', 'perfil_id' => 2),
  array('id' => 4, 'email' => 'teste@teste.com', 'senha' => '1234', 'perfil_id' => 2),
);

/*
echo '<pre>';
print_r($usuarios_app);
echo '</pre>';
*/

foreach ($usuarios_app as $user) {

  if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
    $usuario_autenticado = true;
    $usuario_id = $user['id'];
    $usuario_perfil_id = $user['perfil_id'];
  }
}

if ($usuario_autenticado) {
  $_SESSION['autenticado'] = 'SIM';
  $_SESSION['id'] = $usuario_id;
  $_SESSION['perfil_id'] = $usuario_perfil_id;
  header('location: home.php');
} else {
  $_SESSION['autenticado'] = 'NAO';
  header('location: index.php?login=erro');
}


/*
print_r($_GET);

echo '<br/>';

$_GET['email']
$_GET['senha']
*/

/*
print_r($_POST);

echo '<br/>';

$_POST['email'];
$_POST['senha'];
*/
