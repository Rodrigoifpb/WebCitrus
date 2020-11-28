<?php
#echo $_POST["Redis_port"] . ";" . $_POST["http_port"] . ";" . $_POST["https_port"] . ";" . $_POST["cliente"];

#$value = "echo " . '"'. $_POST["Redis_port"] . ";" . $_POST["http_port"] . ";" . $_POST["https_port"] . ";" . $_POST["cliente"] . '"' ." > /home/rodrigo/value.txt";

#echo exec($value);
#echo $value;
#$citrus_ports = exec();
#$redis_ports = exec();
#echo exec(`docker ps | grep citrus-omniconnect | awk {'print $10'} | awk -F ":" {'print $2'} | awk -F "->" {'print $1'} | sort`, $outputArray , $teste);
$i = `sudo docker ps | grep portainer | awk {'print $10'} | awk -F ":" {'print $2'} | awk -F "->" {'print $1'} | sort`;
#echo exec(`docker ps | grep redis | awk {'print $10'} | awk -F ":" {'print $2'} | awk -F "->" {'print $1'} | sort`);
?>