<?php require_once('header.php'); ?>

<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user-content">
                
                <?php
                    if (isset($success_message)) {
                        echo "<div class='success' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>$success_message</div>";
                    }
                    ?>
                
                
                    <form action="process_advertise.php" method="post" enctype="multipart/form-data">
                        <?php $csrf->echoInputField(); ?>

                        <!-- Existing customer information fields -->
                        <!-- ... -->

                        <!-- New fields for product advertisement -->
                        <div class="col-md-6 form-group">
                            <label for="">Product Name *</label>
                            <input type="text" class="form-control" name="product_name" value="<?php if(isset($_POST['product_name'])){echo $_POST['product_name'];} ?>">
                        </div>
                        
                        
                        
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Description *</label>
                            <textarea name="description" class="form-control" cols="30" rows="5"><?php if(isset($_POST['description'])){echo $_POST['description'];} ?></textarea>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Color *</label>
                            <input type="text" class="form-control" name="color" value="<?php if(isset($_POST['color'])){echo $_POST['color'];} ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Size *</label>
                            <input type="text" class="form-control" name="size" value="<?php if(isset($_POST['size'])){echo $_POST['size'];} ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Old Price *</label>
                            <input type="text" class="form-control" name="old_price" value="<?php if(isset($_POST['old_price'])){echo $_POST['old_price'];} ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">New Price *</label>
                            <input type="text" class="form-control" name="new_price" value="<?php if(isset($_POST['new_price'])){echo $_POST['new_price'];} ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Quantity *</label>
                            <input type="text" class="form-control" name="quantity" value="<?php if(isset($_POST['quantity'])){echo $_POST['quantity'];} ?>">
                        </div>
                        
                        
                        
                        
                        <!-- Add other product details fields (description, color, size, old_price, new_price, quantity) -->
                        <!-- ... -->
                        <div class="col-md-6 form-group">
                            <label for="">Product Picture *</label>
                            <input type="file" class="form-control" name="picture" accept="image/*" required>
                        </div>

                        <!-- Submit button -->
                        <div class="col-md-6 form-group">
                            <label for=""></label>
                            <input type="submit" class="btn btn-danger" value="Advertise Product" name="form_add_product">
                        </div>
                        
                        
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
