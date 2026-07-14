<?php
require 'include/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">
  <title>Thank You | Wellra PureSqueeze</title>
  <meta name="description" content="Wellra - Your Personal Juice Bar On Your Counter, Enjoy Fresh-Squeezed Citrus Juice Without The Hassle, Mess, Or Bulky Equipment.">
  <meta name="keywords" content="Wellra, Juice, Citrus">
  <!-- Open Graph Meta Tags -->
  <meta property="og:locale" content="en_US" />
  <meta property="og:title" content="Wellra PureSqueeze" />
  <meta property="og:description" content="Wellra - Your Personal Juice Bar On Your Counter, Enjoy Fresh-Squeezed Citrus Juice Without The Hassle, Mess, Or Bulky Equipment." />
  <meta property="og:url" content="<?php echo BASE_URL;?>" />
  <meta property="og:site_name" content="Wellra" />
  <meta property="og:image" content="<?php echo BASE_URL;?>">
  <meta property="og:type" content="website" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Wellra PureSqueeze" />
  <meta name="twitter:description" content="Wellra - Your Personal Juice Bar On Your Counter, Enjoy Fresh-Squeezed Citrus Juice Without The Hassle, Mess, Or Bulky Equipment." />
  <meta name="twitter:image:src" content="<?php echo BASE_URL;?>">
  
  <!-- Google SEO Canonical Link -->
  <link rel="canonical" href="<?php echo BASE_URL;?>" />
  <link rel="icon" href="<?php echo BASE_URL;?>/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/thankyou.css">
</head>

<body>
    <main class="thankyou-page">
        <section class="hero-section" aria-label="Reservation confirmation">
            <div class="hero-shell">
                <div class="hero-header">
                    <img src="images/logo-new.png" class="brand-logo" alt="Wellra PureSqueeze">
                </div>

                <div class="hero-content">
                    <div class="hero-copy">
                        <p class="eyebrow">YOU'RE IN!</p>
                        <h1>Thanks For Reserving<br>PureSqueeze</h1>
                        <a class="kickstarter-button" href="#" target="_blank" rel="noopener">
                            FOLLOW US ON KICKSTARTER
                        </a>
                    </div>

                    <img src="images/juicer.png" class="product-image" alt="Wellra PureSqueeze juicer with citrus slices">
                </div>
            </div>
        </section>

        <footer class="vip-footer">
            <div class="vip-inner">
                <div class="vip-intro">
                    <h2>Why Upgrade to VIP?</h2>
                    <p>
                        Upgrade to VIP for priority access, exclusive early-bird pricing, and up to <strong>45%</strong> savings on Wellra PureSqueeze.
                    </p>
                </div>
                <div class="footer-rule" aria-hidden="true"></div>

                <div class="footer-bottom">
                    <p>Copyright &copy; <?php echo date('Y');?> A Common Thread, Inc. All Rights Reserved</p>

                    <div class="powered-by">
                        <span>Powered by</span>
                        <img src="images/agency20.png" alt="Agency 2.0">
                    </div>
                    <p>Privacy Policy | Terms and Conditions</p>
                </div>
            </div>
        </footer>
    </main>
</body>
</html>
