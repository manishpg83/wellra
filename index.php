<?php
require 'include/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">
  <title>Wellra PureSqueeze</title>
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
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/footer.css">
</head>

<body>
  <section class="hero">
    <div class="logo">
      <a href="<?php echo BASE_URL;?>"><img src="images/logo-new.png" alt="Wellra Logo"></a>
    </div>

    <div class="hero-content">
      <div class="left">
        <p class="intro">INTRODUCING</p>

        <h1>Your Personal Juice Bar <br> On Your Counter</h1>

        <h4>ULTIMATE AUTOMATIC CITRUS JUICER</h4>

        <p class="desc">
          Freshly pressed, pulp-free citrus juice in minutes.
          Just drop in while the machine automatically feeds,
          squeezes, and juices for you.
        </p>

        <div class="email-box desktop-reserve">
          <form action="create-checkout-session.php" method="POST" novalidate>
            <input type="email" name="email" placeholder="Type your email here" required>
            <button type="submit">RESERVE VIP ACCESS</button>
          </form>
        </div>

        <p class="offer desktop-reserve">
          Reserve your spot for $5 and Get <span>45% off</span>
        </p>
      </div>

      <div class="right">
        <img src="images/juicer.png" alt="Juicer" class="juicer">
      </div>

      <div class="mobile-reserve">

        <div class="reserve-form">
          <input type="email" placeholder="Type your email here" required>
          <button type="submit">RESERVE VIP ACCESS</button>
        </div>

        <!-- <div class="email-box">
          <form action="create-checkout-session.php" method="POST" novalidate>
            <input type="email" name="email" placeholder="Type your email here" required>
            <button type="submit">RESERVE NOW</button>
          </form>
        </div> -->
        <p class="offer">
          Reserve your spot for $5 and Get <span>45% off</span>
        </p>
      </div>

    </div>
  </section>

  <section class="video-section">
    <video class="hero-video" autoplay muted loop playsinline>
      <source src="video/juicer.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </section>

  <section class="steps-section">

    <h2>
      Enjoy Fresh-Squeezed Citrus Juice Without
      The Hassle, Mess, Or Bulky Equipment
    </h2>

    <div class="steps-grid">

      <div class="step-card">
        <img src="images/press.jpg" alt="Press">
        <h4>1. Press</h4>
      </div>

      <div class="step-card">
        <img src="images/cut.png" alt="Cut">
        <h4>2. Cut</h4>
      </div>

      <div class="step-card">
        <img src="images/insert.JPG" alt="Insert">
        <h4>3. Insert</h4>
      </div>

      <div class="step-card">
        <img src="images/juice.jpg" alt="Juice">
        <h4>4. Juice</h4>
      </div>

    </div>

  </section>

  <section class="features-section">
    <h2>Features</h2>
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
        <img src="images/feat_dishwasher.jpg" alt="Dishwasher-Safe Components">
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

  <section class="hero">
    <div class="top-bar">
      <div class="top-bar-inner">
        <div class="top-bar-text">
          <h3>Get An Exclusive Discount</h3>
          <p>
            Pledge $5 to reserve your spot and receive
            45% off on Wellra when we launch on Kickstarter
          </p>
        </div>
        <div class="top-form">
          <input type="email" placeholder="Type your email here" required>
          <button>Reserve VIP Access</button>
        </div>
      </div>
    </div>
  </section>

  <section class="citrus-section">

    <h2>Every Citrus. Zero Adapters.</h2>

    <div class="feature-card green">
      <div class="media">
        <img src="images/orange.gif" alt="One Juicer Handles All Sizes With Squeezing Technology">
      </div>

      <div class="content">
        <div class="img-bg">
          <h3>One Juicer Handles All Sizes With Squeezing Technology</h3>
          <p>From small limes to large<br> grapefruits with zero adapters.</p>
        </div>
      </div>
    </div>

    <div class="feature-card mint reverse">

      <div class="media">
        <div class="media-reverse">          
          <img src="images/disassembly-and-cleaning.gif" alt="Clean-up In A Minute">
        </div>
      </div>

      <div class="content">
        <div class="img-mint">
          <h3>Clean-up In A Minute</h3>
          <p>Four removable parts. All <br>dishwasher safe.<br> No scrubbing, no soaking,<br> no excuses.</p>
        </div>
      </div>

    </div>

    <div class="feature-card orange">

      <div class="media">
        <img src="images/grapfruit.gif" alt="grapfruit">        
      </div>

      <div class="content">
        <div class="img-orange">
          <h3>More Juice. No Pulp.</h3>
          <p>Our squeezing technology maximizes pure citrus juice with no pulp for a smooth, refreshing pour every time.
          </p>
        </div>
      </div>

    </div>

      <div class="feature-card gray reverse">

        <div class="media-gray">
          <!-- <img autoplay muted loop playsinline> -->
            <img class="gray-1" src="images/powerful-induction-motor.png">
        </div>

        <div class="content">
          <div class="gray-bg">
          <h3>Powerful Induction Motor</h3>
          <p>The same technology used in professional juice bars.</p>
          </div>
        </div>

      </div>

  </section>

  <section class="benefits-section">
    <h2>One Glass - Six Powerful Benefits</h2>
    <div class="benefits-grid">
      <div class="benefit-card hydration">
        <div class="benefit-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3S6 10.2 6 14.5a6 6 0 1 0 12 0C18 10.2 12 3 12 3z" />
            <path d="M9.5 14.5a2.5 2.5 0 0 0 2.5 2.5" />
          </svg>
        </div>
        <div class="benefit-label">Deep Hydration</div>
      </div>
      <div class="benefit-card gut">
        <div class="benefit-icon">
          <img src="images/gut-health.png" alt="Gut Health">
        </div>
        <div class="benefit-label">Gut Health</div>
      </div>
      <div class="benefit-card antioxidant">
        <div class="benefit-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3.5 18 7v7l-6 3.5L6 14V7l6-3.5z" />
            <circle cx="12" cy="3.5" r="1" />
            <circle cx="18" cy="7" r="1" />
            <circle cx="18" cy="14" r="1" />
            <circle cx="12" cy="17.5" r="1" />
            <circle cx="6" cy="14" r="1" />
            <circle cx="6" cy="7" r="1" />
          </svg>
        </div>
        <div class="benefit-label">Antioxidant Protection</div>
      </div>
      <div class="benefit-card energy">
        <div class="benefit-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M13 2 4 14h6l-1 8 9-12h-6l1-8z" />
          </svg>
        </div>
        <div class="benefit-label">Natural Energy</div>
      </div>
      <div class="benefit-card immune">
        <div class="benefit-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 2.5 20 5.5v5.8c0 5-3.5 8.6-8 10.2-4.5-1.6-8-5.2-8-10.2V5.5l8-3z" />
            <path d="M12 8v6M9 11h6" />
          </svg>
        </div>
        <div class="benefit-label">Immune Support</div>
      </div>
      <div class="benefit-card skin">
        <div class="benefit-icon">
          <img src="images/skin.png" alt="Glowing Skin">
        </div>
        <div class="benefit-label">Glowing Skin</div>
      </div>
    </div>
  </section>

  <section class="specifications">

    <div class="spec-overlay">

      <h2>Specifications</h2>

      <div class="spec-grid">

        <div class="spec-item">
          <h4>Juicing Speed</h4>
          <p>Max. 5x faster than household electric citrus juicer</p>
        </div>

        <div class="spec-item">
          <h4>Dimension</h4>
          <p>10.2”(L)×9.3”(W)×18”(H)</p>
        </div>

        <div class="spec-item">
          <h4>Weight</h4>
          <p>19 lbs</p>
        </div>

        <div class="spec-item">
          <h4>Material</h4>
          <p>BPA Free Materials</p>
        </div>

        <div class="spec-item">
          <h4>No-Load RPM / Output RPM</h4>
          <p>10 RPM</p>
        </div>

        <div class="spec-item">
          <h4>Motor</h4>
          <p>Induction Motor</p>
        </div>

        <div class="spec-item">
          <h4>Rated Voltage</h4>
          <p>AC120V/220V, 50/60Hz</p>
        </div>

        <div class="spec-item">
          <h4>Power Plug</h4>
          <p>IEC Plug</p>
        </div>

      </div>

    </div>

  </section>

  <section class="struggle-section">

    <h2 class="struggle-title">
      Struggle Behind Every Sip
    </h2>

    <div class="struggle-grid">

      <div class="struggle-card">
        <div class="struggle-media">
          <img src="images/messy.png" alt="Messy">
          <span class="struggle-x"></span>
        </div>
        <h4>Messy</h4>
      </div>

      <div class="struggle-card">
        <div class="struggle-media">
          <img src="images/difficult.png" alt="Difficult">
          <span class="struggle-x"></span>
        </div>
        <h4>Difficult</h4>
      </div>

      <div class="struggle-card">
        <div class="struggle-media">
          <img src="images/slow.png" alt="Slow">
          <span class="struggle-x"></span>
        </div>
        <h4>Slow</h4>
      </div>

      <div class="struggle-card">
        <div class="struggle-media">
          <img src="images/pulpy.png" alt="Pulpy">
          <span class="struggle-x"></span>
        </div>
        <h4>Pulpy</h4>
      </div>

    </div>

  </section>

  <section class="juice-section">

    <h2>The juice bar was always too far. Now it's right here</h2>

    <div class="juice-grid">

      <div class="juice-card">
        <img src="images/juice1.gif" alt="Juicer GIF">
      </div>

      <div class="juice-card">
        <img src="images/juice2.gif" alt="Juicer GIF">
      </div>

    </div>

  </section>

  <!-- FAQ -->
  <section class="faq-section">
    <h2 class="faq-title">FAQ</h2>
    <div class="faq-list">
      <details class="faq-item">
        <summary>What types of fruits can I juice with the Wellra PureSqueeze?
          <svg class="chev" width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </summary>
        <div class="faq-answer">You can juice all types of citrus fruits, from small limes and lemons to large oranges, grapefruits, and even pomelos.</div>
      </details>
      <details class="faq-item">
        <summary>Do I need to peel the fruit before juicing?
          <svg class="chev" width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </summary>
        <div class="faq-answer">No peeling required! Simply cut your fruit in half or smaller pieces, if necessary, insert it into the chute, and Wellra does the rest - extracting pure juice while keeping peels separate.</div>
      </details>
      <details class="faq-item">
        <summary>Is it easy to clean?
          <svg class="chev" width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </summary>
        <div class="faq-answer">Yes! The Wellra PureSqueeze was designed for convenience. The detachable parts are dishwasher-safe, and the non-slip base ensures easy cleanup without spills.
        </div>
      </details>
      <details class="faq-item">
        <summary>What is the motor power?
          <svg class="chev" width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </summary>
        <div class="faq-answer">It's equipped with a 120V, 60Hz Induction motor, delivering commercial-grade power in a compact, household-friendly size.</div>
      </details>
      <details class="faq-item">
        <summary>Is the juicer made with safe materials?
          <svg class="chev" width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </summary>
        <div class="faq-answer">Absolutely. Every component that touches your juice is BPA-free, ensuring safe, toxin-free juicing every time.</div>
      </details>
      <details class="faq-item">
        <summary>Can Wellra juice apples or carrots?
          <svg class="chev" width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </summary>
        <div class="faq-answer">No. Wellra is specifically designed for citrus fruits and is not intended for hard fruits and produces such as apples, carrots, or other non-citrus fruits and produces.</div>
      </details>
      <details class="faq-item">
        <summary>Is there a warranty?
          <svg class="chev" width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </summary>
        <div class="faq-answer">Yes, all Wellra PureSqueeze juicers come with a 1-year limited warranty covering manufacturer defects and motor performance.</div>
      </details>
      <details class="faq-item">
        <summary>When will I receive my juicer?
          <svg class="chev" width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </summary>
        <div class="faq-answer">We plan to begin fulfilment in 2-3 months after the Kickstarter campaign closes. All backers will receive regular updates with production and shipping timelines.</div>
      </details>
      <details class="faq-item">
        <summary>Can I get a refund or cancel my pledge?
          <svg class="chev" width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </summary>
        <div class="faq-answer">You can adjust or cancel your pledge anytime before the campaign ends. Once production begins, we'll no longer be able to offer refunds, but we're committed to transparency throughout the process.</div>
      </details>
      <details class="faq-item">
        <summary>How can I stay updated on the project?
          <svg class="chev" width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </summary>
        <div class="faq-answer">Follow our Kickstarter updates and join our VIP Facebook Group for exclusive behind-the-scenes access, product tips, and early discount opportunities.
        </div>
      </details>
      <details class="faq-item">
        <summary>What countries will Wellra be shipped to?
          <svg class="chev" width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </summary>
        <div class="faq-answer">Wellra will be shipped worldwide, except to India.</div>
      </details>
    </div>
  </section>

  <section class="reserve-section" id="tmp-verify-anchor">
    <div class="reserve-overlay">
      <div class="reserve-content">
        <h2>Join The Reserve List</h2>
        <p>
          Pledge $5 to reserve your spot and receive 45% off on Wellra
          <br>
          when we launch on Kickstarter
        </p>

        <div class="reserve-form">
          <input type="email" placeholder="Type your email here" required>
          <button type="submit">RESERVE VIP ACCESS</button>
        </div>
      </div>
    </div>
  </section>
  
  <?php
  require 'footer.php';
  ?>
  <script src="js/script.js"></script>
</body>

</html>