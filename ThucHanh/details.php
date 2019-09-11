<?php 

// 1. Connect to Database
require_once "database.php";

$product_id = $_GET['id'];


$sql = "SELECT products.*,categories.name as cat_name FROM products join categories on products.category_id = categories.id where products.id = $product_id";
// step 2.2. query
$stmt = $conn->prepare($sql); 

// step 4;
$stmt->execute();
$product = $stmt->fetch();
?>

<?php 
    include_once "header.php";
?>
    <div class="container">
        <!-- <h1 class="text-center"><?= $product['name'] ?></h1> -->
        <div class="row">
            <div class="col-sm-6">
                <div class="product-image">
                    <figure> <img class="img-fluid" src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>"> </figure>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="product-information">
                    <h3 class="product-name"><?= $product['name'] ?></h3>
                    <h6><em> Category: <?= $product['cat_name'] ?>  </em></h6>
                    <div class="price"><?= $product['price'] ?>$  </div>
                    <div class="product-des">
                        <?= $product['description']  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    include_once "footer.php";
?>