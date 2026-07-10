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
        <img src="images/reservation1.png" alt="">
      </div>

      <div class="gallery-card">
        <img src="images/reservation2.png" alt="">
      </div>

      <div class="gallery-card">
        <img src="images/reservation3.png" alt="">
      </div>

      <div class="gallery-card">
        <img src="images/reservation4.png" alt="">
      </div>

      <div class="gallery-card">
        <img src="images/reservation5.png" alt="">
      </div>

      <div class="gallery-card">
        <img src="images/reservation6.png" alt="">
      </div>

      <div class="gallery-card">
        <img src="images/reservation7.png" alt="">
      </div>

    </div>
  </section>
    <!-- =========================================
    Feature Cards Section
    ========================================== -->

        <section class="feature-section py-5">

            <div class="container">

                <div class="row g-4">

                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <img src="images/feat_citrus.png" alt="Works on Every Citrus Fruit" class="img-fluid">

                            <div class="feature-overlay">
                                <h5>Works on Every Citrus Fruit</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <img src="images/feat_nopulp.png" alt="Maximize Pure Citrus Juice With No Pulp"
                                class="img-fluid">

                            <div class="feature-overlay">
                                <h5>Maximize Pure Citrus Juice With No Pulp</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <img src="images/feat_dishwasher.png" alt="Dishwasher-Safe Components" class="img-fluid">

                            <div class="feature-overlay">
                                <h5>Dishwasher-Safe Components</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <img src="images/feat_motor.png" alt="Powerful Induction Motor" class="img-fluid">

                            <div class="feature-overlay">
                                <h5>Powerful Induction<br> Motor</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <img src="images/feat_bpa.png" alt="100% BPA-Free, Food-Safe Materials" class="img-fluid">

                            <div class="feature-overlay">
                                <h5>100% BPA-Free, Food-Safe Materials</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <img src="images/feat_durable.png" alt="Built With Durable Material And Thoughtful Design"
                                class="img-fluid">

                            <div class="feature-overlayy">
                                <h5>Built With Durable Material<br> And Thoughtful Design</h5>
                            </div>
                        </div>
                    </div>

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
