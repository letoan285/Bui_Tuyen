<?php 
require_once "BaseModel.php";
class Product extends BaseModel {
    public $table = 'products';
    protected $columns = ['name', 'description', 'price', 'category_id', 'image', 'status', 'slug'];
}
