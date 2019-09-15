<?php 
//echo "hello";
// 1. mysql -> canceled
// 2. mysqli -> oop, functional
// 3. pdo -> oop

// Step 1. connect to database
require_once "database.php";

// step 2.1 -  query
$sql = "SELECT * FROM products";

// step 2.2. query
$stmt = $conn->prepare($sql); 

// step 4;
$stmt->execute();


$products = $stmt->fetchAll();








?>

<?php 
include_once "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Danh sach san pham</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th><a class="btn btn-sm btn-success" href="create_product.php">Add</a></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $key => $product): ?>
                	<tr>
                        <td><?= $key+1 ?></td>
                        <td><a href=""> <img width="100" src="<?= $product["image"]?>" alt=""> </a></td>
                        <td><?= $product["name"]?></td>
                        <td><?= $product["price"]?></td>
                        <td><?= $product["category_id"]?></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="details.php?id=<?= $product["id"]?>">View</a>
                            <a class="btn btn-sm btn-warning" href="edit_product.php?id=<?= $product["id"]?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="">Del</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php 
include_once "footer.php";
?>