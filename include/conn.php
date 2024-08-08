<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
/*
const mysql = require('mysql2/promise');

const connection = mysql.createPool({
    host: '',
    user: '',
    password: '',
    database: '',
    port: 11033
});

export default connection;
*/
// connect to the database
$host = 'monorail.proxy.rlwy.net'; // database server address
$username = 'root'; // database username
$password = 'wlAeKZhmBojdrbvIHqLKKFSWSbitltyA'; // database password
$database = 'railway'; // database name
$conn = mysqli_connect($host, $username, $password, $database);


?>
