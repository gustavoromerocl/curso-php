<?php
$loginSuccessful=false;
if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    $username=$_SERVER['PHP_AUTH_USER'];
    $password=$_SERVER['PHP_AUTH_PW'];
    if($username=='Gustavo' && $password='123'){
        $loginSuccessful=true;
    }
}


if(!$loginSuccessful){
    header('WWW-Authenticate:Basic');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Error';
}else{
    echo "Bienvenido";
}
?>