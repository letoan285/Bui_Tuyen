<?php 
include_once "header.php";

?>

<div class="container">
<div class="row">
    <div class="col-md-8 offset-2">
        <h3 class="text-center">Create New Product</h3>
        <form action="save_product.php" method="post">
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
                <input type="text" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="" class="form-control">
                    <option value="1">Dien Thoai</option>
                    <option value="2">May De Ban</option>
                    <option value="3">Laptop</option>
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