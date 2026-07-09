<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wellra PureSqueeze</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  

  <section class="hero">
    <div class="logo">
      <img src="images/logo-new.png" alt="Wellra Logo">
    </div>

    <div class="hero-content">
      <div class="left">
        <p class="intro">INTRODUCING</p>
        <!-- <h2 class="intro">INTRODUCING</h2> -->

        <h1>Your Personal Juice Bar <br> On Your Counter</h1>

        <h4>ULTIMATE AUTOMATIC CITRUS JUICER</h4>

        <p class="desc">
          Freshly pressed, pulp-free citrus juice in minutes.
          Just drop in while the machine automatically feeds,
          squeezes, and juices for you.
        </p>
        <br>

        <div class="email-box">
          <input type="email" placeholder="Type your email here">
          <button>GET LAUNCH INVITE</button>
        </div>

        <p class="offer">
          Reserve your spot for $5 and Get <span>42% off</span>
        </p>
      </div>

      <div class="right">
        <div class="reserve-card">
          <h3 class="reserve-title">Reserve Your PureSqueeze</h3>
          <form id="payment-form">
            <div class="price-field">
              <span>Price</span>
              <span>$5</span>
            </div>

            <div class="field">
              <label>Payment Details</label>
              <div id="payment-element"></div>
              <div class="error-text" id="payment-message"></div>
            </div>

            <button type="submit" class="btn btn-lime btn-block">
              Pay Now
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

 



  <section class="features-section">

    <div class="feature-grid">

      <div class="feature-tile">
        <img src="images/feat_citrus.png" alt="Works on Every Citrus Fruit">
        <div class="tile-label">
          Works on Every Citrus Fruit
        </div>
      </div>

      <div class="feature-tile">
        <img src="images/feat_nopulp.png" alt="Maximize Pure Citrus Juice With No Pulp">
        <div class="tile-label">
          Maximize Pure Citrus Juice With No Pulp
        </div>
      </div>

      <div class="feature-tile">
        <img src="images/feat_dishwasher.png" alt="Dishwasher-Safe Components">
        <div class="tile-label">
          Dishwasher-Safe Components
        </div>
      </div>

      <div class="feature-tile">
        <img src="images/feat_motor.png" alt="Powerful Induction Motor">
        <div class="tile-label">
          Powerful Induction Motor
        </div>
      </div>

      <div class="feature-tile">
        <img src="images/feat_bpa.png" alt="100% BPA-Free, Food-Safe Materials">
        <div class="tile-label">
          100% BPA-Free, Food-Safe Materials
        </div>
      </div>

      <div class="feature-tile">
        <img src="images/feat_durable.png" alt="Built With Durable Material">
        <div class="tile-label">
          Built With Durable Material And Thoughtful Design
        </div>
      </div>

    </div>

  </section>

 



  <section class="benefits-section">
    <h2>One Glass - Six Powerful Benefits</h2>

    <div class="benefits-grid">
      <div class="benefit-card">
        <img src="images/Gut-Health.png" alt="Promotes Gut Health">
        <div class="benefit-label">Gut Health</div>
      </div>

      <div class="benefit-card">
        <img src="images/Glowing.png" alt="Enhances Glowing Skin">
        <div class="benefit-label">Glowing Skin</div>
      </div>

      <div class="benefit-card">
        <img src="images/Natural.png" alt="Provides Natural Energy">
        <div class="benefit-label">Natural Energy</div>
      </div>

      <div class="benefit-card">
        <img src="images/Immune.png" alt="Supports Immune System">
        <div class="benefit-label">Immune Support</div>
      </div>

      <div class="benefit-card">
        <img src="images/Antioxidant.png" alt="Provides Antioxidant Protection">
        <div class="benefit-label">Antioxidant Protection</div>
      </div>

      <div class="benefit-card">
        <img src="images/Deep-Hydration.png" alt="Deep Hydration Benefits">
        <div class="benefit-label">Deep Hydration</div>
      </div>
    </div>
  </section>





  <footer class="vip-footer">
    <div class="vip-top">
      <h2>Why Upgrade to VIP?</h2>

      <p>
        Upgrade to VIP for priority access, exclusive early-bird<br>
        pricing, and up to <span class="highlight">42%</span> savings on
        Wellra PureSqueeze.
      </p>
    </div>

    <div class="footer-line"></div>

    <div class="vip-bottom">
      <p>Copyright © 2026 A Common Thread, Inc. All Rights Reserved</p>

      <div class="powered">
        <p>Powered by</p>
        <img src="images/agency20.png" alt="Agency 2.0">
      </div>

      <p>Privacy Policy | Terms and Conditions</p>
    </div>
  </footer>






  <script src="https://js.stripe.com/v3/"></script>
  <script>
    const STRIPE_PUBLISHABLE_KEY = "<?php echo STRIPE_PUBLISHABLE_KEY; ?>";
  </script>
  <script src="script.js"></script>
</body>

</html>