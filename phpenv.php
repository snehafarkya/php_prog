<?php
$system_env = 
array('PHP_SELF','SCRIPT_NAME','SERVER_NAME','SERVER_SOFTWARE','SERVER_PROTOCOL','REMOTE_ADDR','SERVER_PORT','HTTP_USER_AGENT');

foreach ($system_env as  $value) {
    # code...
    echo "$value: $_SERVER[$value] <br>";
}

?>