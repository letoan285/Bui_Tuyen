<?php 
include_once "header.php";
require_once "database.php";

// step 2.1 -  query
$sql = "SELECT * FROM categories";

// step 2.2. query
$stmt = $conn->prepare($sql); 

// step 4;
$stmt->execute();


$categories = $stmt->fetchAll();
// var_dump($categories);die;
?>

<div class="container">
<div class="row">
    <div class="col-md-8 offset-2">
        <h3 class="text-center">Create New Product</h3>
        <form action="save_product.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="" class="form-control">
                <option value="0">Choose Category</option>
                 <?php foreach ($categories as $key => $cate): ?>
                    <option value="<?php echo $cate['id'] ?>"><?php echo $cate['name'] ?></option>                 	
                 <?php endforeach ?>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-block btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>

</div>






<?php 
include_once "footer.php";

?>