<?php 
require_once "database.php";

$productId = $_GET['id'];

$sql = "SELECT * FROM products WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $productId);
$stmt->execute();

$product = $stmt->fetch();
// dd($product);

// step 2.1 -  query
$sql1 = "SELECT * FROM categories";

// step 2.2. query
$stmt1 = $conn->prepare($sql1); 

// step 4;
$stmt1->execute();


$categories = $stmt1->fetchAll();

?>
<?php 
include_once "header.php";

?>




<div class="container">
<div class="row">
    <div class="col-md-8 offset-2">
        <h3 class="text-center">Edit Product: <?= $product['name'] ?></h3>
        <form action="update_product.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" cols="30" rows="5"><?= $product['name'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name="price" class="form-control" value="<?= $product['price'] ?>">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <img width="150" src="<?= $product['image'] ?>" alt="">
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="" class="form-control">
                <option value="0">Choose Category</option>
                    <?php foreach ($categories as $key => $cate): ?>
                        <option <?php if($product['category_id'] == $cate['id']){
                                echo "selected";
                        } ?> value="<?php echo $cate['id'] ?>"><?php echo $cate['name'] ?></option>                 	
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
