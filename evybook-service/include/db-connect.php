<?php
$connectionInfo = array(
  "UID" => "dbroomlinkplatform@lax338b8sm",
  "pwd" => "city101215.rls",
  "Database" => "evytinkdb",
  "LoginTimeout" => 30,
  "Encrypt" => 1,
  "TrustServerCertificate" => 0);
$serverName = "tcp:lax338b8sm.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
