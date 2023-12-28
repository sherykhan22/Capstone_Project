<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
if (isset($_POST['form2'])) {

    $valid = 1;

    if(empty($_POST['donation_amount'])) {
        $valid = 0;
        $error_message .= "Please enter the donation amount.<br>";
    }

    if(empty($_POST['transaction_id'])) {
        $valid = 0;
        $error_message .= "Please enter the transaction ID.<br>";
    }

    if($valid == 1) {

        $donation_datetime = date('Y-m-d h:i:s');
        $donation_timestamp = time();

        // saving into the database
        $statement = $pdo->prepare("INSERT INTO tbl_donations (
                                        donation_amount,
                                        transaction_id,
                                        donation_datetime,
                                        donation_timestamp
                                    ) VALUES (?,?,?,?)");
        $statement->execute(array(
                                        $_POST['donation_amount'],
                                        $_POST['transaction_id'],
                                        $donation_datetime,
                                        $donation_timestamp
                                    ));

        unset($_POST['donation_amount']);
        unset($_POST['transaction_id']);

        $success_message = "Thank you for your donation!";
    }
}
?>

<div class="page-banner" style="background-color:#444;background-image: url(assets/uploads/<?php echo $banner_donation; ?>);">
    <div class="inner">
        <h1>Donation Page</h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user-content">

                    <div>
                        <h3>Account Details for Donation:</h3>
                        <p>Bank Name: <?php echo "ABCD"; ?></p>
                        <p>Account Number: <?php echo "12345678"; ?></p>
                        <p>Branch Name: <?php echo "ASDFGH"; ?></p>
                        <p>Country: <?php echo "USA"; ?></p>
                    </div>


                    <form action="" method="post">
                        <?php $csrf->echoInputField(); ?>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">

                                <?php
                                if($error_message != '') {
                                    echo "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>".$error_message."</div>";
                                }
                                if($success_message != '') {
                                    echo "<div class='success' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>".$success_message."</div>";
                                }
                                ?>

                                <div class="col-md-6 form-group">
                                    <label for="">Donation Amount *</label>
                                    <input type="text" class="form-control" name="donation_amount" value="<?php if(isset($_POST['donation_amount'])){echo $_POST['donation_amount'];} ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Transaction ID *</label>
                                    <input type="text" class="form-control" name="transaction_id" value="<?php if(isset($_POST['transaction_id'])){echo $_POST['transaction_id'];} ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for=""></label>
                                    <input type="submit" class="btn btn-danger" value="Donate Now" name="form2">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
