<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wellra</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="style2.css">
</head>

<body>

  <section class="hero-section">

    <div class="container-fluid">

      <div class="row align-items-center">

        <!-- LEFT -->

        <div class="col-lg-6 left-side">

          <img src="images/logo-new.png" class="logo img-fluid">

          <h1 class="hero-title">
            UNLOCK THE SPECIAL VIP PRICE
          </h1>

          <div class="text-center">

            <img src="images/juicer.png" class="juicer img-fluid">

          </div>

          <h2>

            Wellra PureSqueeze

            <span class="green">$289 VIP</span>

            <span class="msrp">| $499 MSRP</span>

          </h2>

        </div>


        <!-- RIGHT -->

        <div class="col-lg-6 d-flex justify-content-center">
            <form class="payment-card" id="payment-form" action="#" method="POST" novalidate>

                <h2 class="form-title">Reserve your PureSqueeze</h2>

                <div class="price-box">
                <span class="price-label">Price</span>
                <strong class="price-value">$5</strong>
                </div>

                <div class="field-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                <div class="error-text" data-error-for="email"></div>
                </div>

                <div class="field-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required inputmode="tel">
                <div class="error-text" data-error-for="phone"></div>
                </div>

                <div class="field-group">
                <label for="card-element">Payment Details</label>
                <div id="card-element" class="stripe-card-element"></div>
                <div class="error-text" id="card-errors" role="alert"></div>
                </div>

                <button type="submit" class="pay-btn">PAY NOW</button>

            </form>
            </div>

      </div>

    </div>

  </section>

  <section class="gallery-section">
    <div class="gallery-scroll">

      <div class="gallery-card">
        <img src="images/gallery1.png" alt="">
      </div>

      <div class="gallery-card">
        <img src="images/gallery2.png" alt="">
      </div>

      <div class="gallery-card">
        <img src="images/gallery3.png" alt="">
      </div>

      <div class="gallery-card">
        <img src="images/gallery4.png" alt="">
      </div>

      <div class="gallery-card">
        <img src="images/gallery5.png" alt="">
      </div>

      <div class="gallery-card">
        <img src="images/gallery6.png" alt="">
      </div>

      <div class="gallery-card">
        <img src="images/gallery7.png" alt="">
      </div>

    </div>
  </section>

  <script src="https://js.stripe.com/v3/"></script>
  <script>
      const STRIPE_PUBLISHABLE_KEY = "<?php echo STRIPE_PUBLISHABLE_KEY; ?>";
      </script>
  <script src="reservation.js"></script>
</body>
</html>
