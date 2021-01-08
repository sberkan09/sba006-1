<?php

/*$conn = mysqli_init(); 
mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); 
mysqli_real_connect($conn, "sba006-1.mysql.database.azure.com", "sberkan09@sba006-1", "EtuSami006", "test", 3306, MYSQLI_CLIENT_SSL);*/

$options = array(
    PDO::MYSQL_ATTR_SSL_CA => 'DigiCertGlobalRootCA.crt.pem'
);
$db = new PDO('mysql:host=sba006-1.mysql.database.azure.com;port=3306;dbname=test', 'sberkan09', 'EtuSami006', $options);