<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="payment-container">
        <center>
        <h1>Payment</h1>
     
        <form id="paymentForm" action="payment.php" method="get">
            <label for="amount">Amount:</label><br>
            <input type="number" id="amount" name="amount" required><br>

            <label for="phone">Phone Number:</label><br>

            <input type="tel" id="phone" name="phone" required><br>
            <input type="radio" id="phone1" >Postpaid plan</input>
            <input type ="radio" id="phone1">Prepaid plan</input><br>


            <button type="submit">Pay Now</button>
        </center>
        </form>
    </div>
</body>
</html>
