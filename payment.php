<?php?>
<!DOCTYPE html>
<html lang="en">
<head style="background-color:#0b3b63">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="css/payment.css">
</head>
<body style="background-color:#0b3b63">
    <div class="backdrop"></div>
    <div class="payment_form">
        <h2>Payment Form</h2>
        <form action="summary.php" method="POST" style="background-color:#0b3b63">
            <p>
                <label for="bank">Bank</label>
                <select name="bank" id="">
                    <option value="uba">United Bank of Africa</option>
                    <option value="gtb">Guarranty Trust Bank</option>
                    <option value="access">Access Bank</option>
                    <option value="union">Union Bank</option>
                    <option value="wema">Wema Bank</option>
                    <option value="first">First Bank</option>
                    <option value="zenith">Zenith Bank</option>
                </select>
            </p>
            <p>
                <label for="acct_name">Account Name</label>
                <input type="text" name="acct_name" id="">
            </p>
            <p>
                <label for="acct_number">Account Number</label>
                <input type="text" name="scct_number" id="">
            </p>
            <p>
                <label for="pin">Pin</label>
                <input type="password" name="pin" id="" maxlength="4">
            </p>
            <p class="submit_holder">
                <input type="submit" value="Proceed">
            </p>
        </form>
    </div>
</body>
</html>