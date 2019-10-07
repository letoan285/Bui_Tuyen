<?php 
// require_once "Product.php";
require_once "Category.php";
// $id = $_GET['id'];
// $product = Product::find($id);
$cates = Category::all();

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
            <h3 class="text-center">Them moi san pham</h3>
            <form action="add.php" method="POST">
                <div class="form-group">
                    <label for="">Ten san pham</label>
                    <input type="text" class="form-control" name="name" >
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" class="form-control" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" id="" class="form-control">
                        <?php foreach ($cates as $key => $cate): ?>
                        <option value="<?= $cate->id?>"><?= $cate->name?></option>
                        <?php endforeach ?>
                    </select>
                </div><div class="form-group">
                    <label for="">Image</label>
                    <img width="100" src="<?= $product->image?>" alt="">
                    <input type="text" class="form-control" name="image" >
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" class="form-control" name="status" >
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>