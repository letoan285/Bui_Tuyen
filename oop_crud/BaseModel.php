<?php 

class BaseModel {
    protected $host = '127.0.0.1';
    protected $user = 'root';
    protected $pass = 'mysql';
    protected $db = 'demo';
    public $conn = null;
    protected $query = "";

    public function __construct(){
        $this->conn = new PDO("mysql:host=$this->host; dbname=$this->db", "$this->user", "$this->pass");
    }
    public static function all(){
        $model = new static();
        $model->query = "SELECT * FROM $model->table";
        $stmt = $model->conn->prepare($model->query);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $rs;
    }
}
