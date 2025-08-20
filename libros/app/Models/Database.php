<?php
require_once __DIR__ . '/../../config/config.php';

class Database {
    protected $pdo;

    public function __construct() {
        static $pdoInstance = null;
        if ($pdoInstance === null) {
            try {
                $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
                $pdoInstance = new PDO($dsn, DB_USER, DB_PASS, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
        $this->pdo = $pdoInstance;
    }
}
