<?php 
require_once "db.php";
class BaseModel {
    protected $host = '127.0.0.1';
    protected $user = 'root';
    protected $pass = '';
    protected $db = 'bui_tuyen_database';
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
    public static function find($id){
        $model = new static();

        $model->query = "SELECT * FROM $model->table WHERE id = $id";
        $stmt = $model->conn->prepare($model->query);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        if(count($rs) > 0){
            return $rs[0];
        }
        return null;
    }
    public function delete(){
        // var_dump('delte');
        $this->query = "DELETE FROM $this->table WHERE id = $this->id";
        $stmt = $this->conn->prepare($this->query);
        try {
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            var_dump($e->getMessage());die;
        }
    }
    public static function where($arr = []){
        $model = new static();
        $model->query = "SELECT * FROM $model->table WHERE ";
        if(count($arr) == 2) {
            $model->query .= "$arr[0] = '$arr[1]' ";
        }
        if(count($arr) == 3){
            $model->query .= "$arr[0] $arr[1] '$arr[2]' ";
        }
        return $model;
    }
    public function andwhere($arr = []){
        $this->query .= " and ";
        if(count($arr) == 2) {
            $this->query .= "$arr[0] = '$arr[1]' ";
        }
        if(count($arr) == 3){
            $this->query .= "$arr[0] $arr[1] '$arr[2]' ";
        }
        return $this;
    }
    public function orwhere($arr = [])
    {
        $this->query .= " or ";
        if(count($arr) == 2) {
            $this->query .= "$arr[0] = '$arr[1]' ";
        }
        if(count($arr) == 3){
            $this->query .= "$arr[0] $arr[1] '$arr[2]' ";
        }
        return $this;
    }
    public function get()
    {
        $stmt = $this->conn->prepare($this->query);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
        return $rs;
    }
    public function first()
    {
        $stmt = $this->conn->prepare($this->query);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
        return $rs[0];
    }
    public function update()
    {
        dd($this);
    }

}
