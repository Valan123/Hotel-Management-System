<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment.css">
    <title>Payment</title>
</head>
<body>
    
    <div class="mainscreen">
          <div class="card">
            <div class="leftside">
              <img src="logo.png" class="product" alt="Shoes"/>
            </div>
            <div class="rightside">
              <form action="forpayment.php" method="post">
                <h1>Booking</h1>
                <h2>Payment Information</h2>
                <p>Cardholder Name</p>
                <input type="text" class="inputbox" name="name" required />
                <p>Card Number</p>
                <input type="number" class="inputbox" name="card_number" id="card_number" required />
    
                <p>Card Type</p>
                <select class="inputbox" name="card_type" id="card_type" required>
                  <option value="">--Select a Card Type--</option>
                  <option value="Visa">Visa</option>
                  <option value="RuPay">RuPay</option>
                  <option value="MasterCard">MasterCard</option>
                </select>
    <div class="expcvv">
    
                <p class="expcvv_text">Expiry</p>
                <input type="date" class="inputbox" name="exp_date" id="exp_date" required />
    
                <p class="expcvv_text2">CVV</p>
                <input type="password" class="inputbox" name="cvv" id="cvv" required />
            </div>
                <p></p>
                <button class="button">Book Room</button>
              </form>
            </div>
          </div>
        </div>
      
    
</body>
</html>