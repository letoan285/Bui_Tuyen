<?php 
require_once "Product.php";
require_once "User.php";


// var_dump($products = User::all());die;
$products = Product::all();
// $id=4;
// $model = Product::find($id);
// $product = Product::where(['id', '>', 2])->andwhere(['id', '=', 7])->orwhere(['id', '>', 3])->get();
// var_dump($product);die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
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
                        <th><a class="btn btn-sm btn-success" >Add</a></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $key => $product): ?>
                	<tr>
                        <td><?= $key+1 ?></td>
                        <td><a href=""> <img width="100" src="<?= $product->image?>" alt=""> </a></td>
                        <td><?= $product->name?></td>
                        <td><?= $product->price?></td>
                        <td><?= $product->category_id?></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="detail.php?id=<?= $product->id?>">View</a>
                            <a class="btn btn-sm btn-warning" href="edit.php?id=<?= $product->id?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $product->id?>">Del</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>