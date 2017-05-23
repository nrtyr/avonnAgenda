<?php

$ipUsuario = '' ;

if (getenv('HTTP_CLIENT_IP')) {
       $ipUsuario = getenv('HTTP_CLIENT_IP');
} 
elseif (getenv('HTTP_X_FORWARDED_FOR')){
    $ipUsuario = getenv('HTTP_X_FORWARDED_FOR'); 
}
elseif (getenv('HTTP_VIA')){
    $ipUsuario = getenv('HTTP_VIA'); 
}
elseif (getenv('HTTP_USERAGENT_VIA')){
    $ipUsuario = getenv('HTTP_USERAGENT_VIA'); 
}
elseif (getenv('HTTP_X_FORWARDED')) {
    $ipUsuario = getenv('HTTP_X_FORWARDED'); 
}
elseif (getenv('HTTP_X_CLUSTER_CLIENT_IP')) {
    $ipUsuario = getenv('HTTP_X_CLUSTER_CLIENT_IP'); 
}
elseif (getenv('HTTP_FORWARDED_FOR')) {
    $ipUsuario = getenv('HTTP_FORWARDED_FOR');
}
elseif (getenv('HTTP_FORWARDED')) {
    $ipUsuario = getenv('HTTP_FORWARDED');
}
elseif (getenv('HTTP_PROXY_CONNECTION')) {
    $ipUsuario = getenv('HTTP_PROXY_CONNECTION');
}
elseif (getenv('HTTP_XPROXY_CONNECTION')) {
    $ipUsuario = getenv('HTTP_XPROXY_CONNECTION');
}
elseif (getenv('HTTP_PC_REMOTE_ADDR')) {
    $ipUsuario = getenv('HTTP_PC_REMOTE_ADDR');
}
else {
    $ipUsuario = $_SERVER['REMOTE_ADDR']; 
}


    
?>