<?php



class Database {
    private $prefix;

    public function __construct() {
        $config=require_once 'config.php';
        $this->prefix=$config['db']['prefix'];
        $dsn = "mysql:host={$config['db']['host']};dbname={$config['db']['database']}";
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        );
        try {
            $this->conn = new PDO($dsn, $config['db']['username'],$config['db']['password'], $options);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query($sql, $params = array()) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function insert($table, $data) {
        $table=$this->prefix . $table;
        $fields = array_keys($data);
        $values = array_values($data );
        $placeholders = array_fill(0, count($values), '?');
        $sql = "INSERT INTO {$table} (" . implode(',', $fields) . ") VALUES (" . implode(',', $placeholders) . ")";
        return $this->query($sql, $values);
    }

    public function update($table, $data, $where) {
        $table=$this->prefix . $table;
        $set = array();
        $values = array();
        foreach ($data as $field => $value) {
            $set[] = "{$field}=?";
            $values[] = $value;
        }
        $sql = "UPDATE {$table} SET " . implode(',', $set) . " WHERE {$where}";
        return $this->query($sql, $values);
    }

    public function delete($table, $where) {
        $sql = "DELETE FROM {$table} WHERE {$where}";
        return $this->query($sql);
    }

    public function select($table, $where = '1', $fields = '*') {
        $table=$this->prefix . $table;
        $sql = "SELECT {$fields} FROM {$table} WHERE {$where}";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }
}