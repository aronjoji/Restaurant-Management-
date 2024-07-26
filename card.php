<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="card/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="card/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="card/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="card/bootstrap/js/bootstrap.min.js"></script>

    <script>
        function isValidCardNumber(cardNumber) {
            // Implement Luhn algorithm for card number validation
            // Code for Luhn algorithm validation

            return cardNumber.length === 16; // For illustration, considering length only
        }

        function isValidExpirationDate(expirationDate) {
            // Example validation for MM/YY format
            const regex = /^(0[1-9]|1[0-2])\/\d{2}$/;
            return regex.test(expirationDate);
        }

        function isValidCVV(cvv) {
            // Example validation for 3-digit CVV
            const regex = /^[0-9]{3}$/;
            return regex.test(cvv);
        }

        function validatePayment() {
            const cardNumber = document.querySelector('input[name="cn"]').value;
            const expirationDate = document.querySelector('input[name="exp"]').value;
            const cvv = document.querySelector('input[name="cvv"]').value;

            // Validate card number
            if (cardNumber.length !== 16 || isNaN(cardNumber)) {
                alert("Please enter a valid 16-digit card number.");
                return false;
            }

            // Validate expiration date
            // Example: Check if it's not empty
            if (expirationDate.trim() === '' || !isValidExpirationDate(expirationDate)) {
                alert("Please enter a valid expiration date in MM/YY format.");
                return false;
            }

            // Validate CVV
            if (cvv.length !== 3 || isNaN(cvv)) {
                alert("Please enter a valid 3-digit CVV.");
                return false;
            }

            // If all validations pass, redirect to orderc.php
            window.location.href = "orderc.php";
            return true;
        }
    </script>
</head>

<?php
    include 'conn.php';
    session_start();
    if (isset($_SESSION['t'])) {
        $t = $_SESSION['t'];
    }
    if (isset($_POST['submit'])) {
        $_SESSION['cn'] = $_POST['cn'];
        header('Location: orderc.php'); // Redirect to orderc.php after form submission
        exit;
    }
?>

<body>
    <div class="container">
        <div class="page-header">
            <h1> <small></small></h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <h3 class="text-center">Payment Details</h3>
                                <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                            </div>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" onsubmit="return validatePayment();">
                                <!-- Your form content -->

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>CARD NUMBER</label>
                                            <div class="input-group">
                                                <input type="text" name='cn' class="form-control" placeholder="Valid Card Number" />
                                                <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-7 col-md-7">
                                        <div class="form-group">
                                            <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                            <input type="text" name="exp" class="form-control" placeholder="MM / YY" />
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-md-5 pull-right">
                                        <div class="form-group">
                                            <label>CV CODE</label>
                                            <input type="tel" name="cvv" class="form-control" placeholder="CVC" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>CARD OWNER</label>
                                            <input type="text" class="form-control" placeholder="Card Owner Names" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Total payable amount = <?php echo $_SESSION['t']; ?></label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="submit" name="submit">Process payment</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .cc-img {
                margin: 0 auto;
            }
        </style>
    </div>


    <style>
        .cc-img {
            margin: 0 auto;
        }
    </style>
    </div>
</body>

</html>
