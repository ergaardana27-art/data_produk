<?php
class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'data_produk';

    public function connect() {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";
        return new PDO($dsn, $this->user, $this->pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
}
?>