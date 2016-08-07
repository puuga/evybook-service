<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Sample Code:\r\n\r\n
try {
  $conn = new PDO ( "sqlsrv:server = tcp:lax338b8sm.database.windows.net,1433; Database = evytinkdb",
  "dbroomlinkplatform", "{your_password_here}");
  $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch ( PDOException $e ) {
  print( "Error connecting to SQL Server." );
  die(print_r($e));
}


// try {
//   $conn = new PDO(
//     "sqlsrv:server = tcp:lax338b8sm.database.windows.net,1433; Database = evytinkdb",
//     "dbroomlinkplatform",
//     "{your_password_here}");
//   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
// } catch ( PDOException $e ) {
//   print( "Error connecting to SQL Server." )
//   die(print_r($e));
// }


// $serverName = "tcp:lax338b8sm.database.windows.net,1433";
// $conn = mssql_connect($serverName, "dbroomlinkplatform@lax338b8sm", "{your_password_here}");
// if (!$conn) {
//     die('Something went wrong while connecting to MSSQL');
// }
// $connectionInfo = array(
//   "UID" => "dbroomlinkplatform@lax338b8sm",
//   "pwd" => "{your_password_here}",
//   "Database" => "evytinkdb",
//   "LoginTimeout" => 30,
//   "Encrypt" => 1,
//   "TrustServerCertificate" => 0);
// $serverName = "tcp:lax338b8sm.database.windows.net,1433";
// $conn = sqlsrv_connect($serverName, $connectionInfo);
//
// if( $conn ) {
//      echo "Connection established.<br />";
// }else{
//      echo "Connection could not be established.<br />";
//      die( print_r( sqlsrv_errors(), true));
// }
?>
