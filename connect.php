<?php
require_once __DIR__.'/config.php';
$conn = null;

class CONNECT {

    function __construct() {
        $this->connect();
    }
 
    function __destruct() {
        $this->close();
    }

    function connect() {
        $dsn = 'mysql:dbname='.DB_DATABASE.';host='.DB_SERVER;
        $usuario = DB_USER;
        $contraseña = DB_PASSWORD;

        try {
            $conn = new PDO($dsn, $usuario, $contraseña);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }

        return $conn;
    }

    function close() {
        // closing db connection
        $conn = null;
    }
 
}
 
?>