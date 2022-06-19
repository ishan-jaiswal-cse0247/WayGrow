
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>Pay to Select</title>
  <link rel ="shortcut icon" type = "image/png" href = "../favicon.png"> 	<link rel="stylesheet" href="styles.css?v=<?php echo time();?>">
</head>
<body>

<div class="wrapper">
  <div class="checkout_wrapper">
    <div class="product_info">
      <img src="product.png" alt="product">
      <div class="content">
      <p>Everything in Rs 100 </p>
        <h3> <br/></h3>
      </div>
    </div>  
    <div class="checkout_form">
      <p>Pay to Select</p>
      <div class="details">
        <div class="section">
          <input type="text" placeholder="Card Number">
        </div>
        <div class="section">
          <input type="text" placeholder="Cardholder Name">
        </div>
        <div class="section last_section">
          <div class="item">
            <input type="text" placeholder="Expiry Date">
          </div>
          <div class="item">
            <input type="text" placeholder="CVV">
          </div>
        </div>
        
        <div class="btn">
          <a name = "payed" href="donepay.php">Pay</a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>