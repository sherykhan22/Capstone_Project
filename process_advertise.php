<?php
require_once('header.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_add_product'])) {
    // Validate and sanitize input (add your validation logic here)
    // ...

    // Check if 'picture' key exists in $_FILES array
    if (isset($_FILES['picture'])) {
        $uploadDirectory = 'assets/uploads/';
        $picturePath = $uploadDirectory . basename($_FILES['picture']['name']);
        
        // Check if file already exists
        if (file_exists($picturePath)) {
            echo "Sorry, the file already exists.";
        } else {
            // Check if the file is an allowed image type
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            $fileExtension = strtolower(pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION));

            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
            } else {
                // Move the uploaded file
                move_uploaded_file($_FILES['picture']['tmp_name'], $picturePath);

                // Insert into the database
                $statement = $pdo->prepare("INSERT INTO tbl_user_products (
                                                user_id,
                                                product_name,
                                                description,
                                                color,
                                                size,
                                                old_price,
                                                new_price,
                                                quantity,
                                                picture_path,
                                                status
                                            ) VALUES (?,?,?,?,?,?,?,?,?,?)");
                if ($statement->execute(array(
                    // Retrieve user_id from the session or wherever you store it
                    $_SESSION['customer']['cust_id'],
                    strip_tags($_POST['product_name']),
                    strip_tags($_POST['description']),
                    strip_tags($_POST['color']),
                    strip_tags($_POST['size']),
                    $_POST['old_price'],
                    $_POST['new_price'],
                    $_POST['quantity'],
                    $picturePath,
                    'pending'
                ))) {
                    // Set a success variable
                    $success_message = "Product advertised successfully!";
                } else {
                    // Handle insertion failure
                    echo "Error: Product advertisement failed.";
                }
            }
        }
    } else {
        echo "Error: 'picture' key not found in the uploaded file.";
    }
}

// Include your header or show any additional content
require_once('footer.php');
?>