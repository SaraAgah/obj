<link rel="stylesheet" href="./css/style.css">
<?php
require_once './objetos/post.php';
require_once 'control.php';
require_once './objetos/session.php';
$session = new Session();
$post = new Post();
$isLogged = false;
if ($post->get('User') <> ''&& $post->get('pass') <> ''){
    $login = $post->get('User');
    $pass = $post->get('pass');
    foreach ($control as $index => $value) {
        if ($login == $value['User'] && $pass == $value['pass']) {
            $session->set('email', $login);
            $session->set('pass', $pass);
            require_once 'pagina1.php';
            $isLogged = true;
            break;
        }
    } 
}else if ($session->get('User')<> ''&& $session->get('pass')<>''){
    foreach ($control as $index => $value) {
        if ($session->get('email') == $value['User'] && $session->get('pass') == $value['pass']) {
        require_once 'pagina1.php';
        $isLogged = true;
        break;
        }
    }
}
else if ($isLogged == false){
    echo '<p><a href="index.html">Faça o login</a></p>';
}
