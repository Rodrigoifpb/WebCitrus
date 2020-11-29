<?php
$ip = $_GET['ip'];
$user = $_GET['user'];
$key = $_GET['key'];

$connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $key);

                $stream = ssh2_exec($connection, `:put [sudo docker ps | grep citrus-omniconnect | awk {'print $10'} | awk -F ":" {'print $2'} | awk -F "->" {'print $1'} | sort]`);
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);

        header("Content-type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Origin: *");

        echo json_encode($output);      

?>