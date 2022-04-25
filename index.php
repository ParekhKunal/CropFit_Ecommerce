<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


<!-- Cover -->
<main>
  <div class="hero">
    <a href="shop.php" class="btn1">View all products
    </a>
  </div>
  <!-- Main -->
  <div class="wrapper">
    <h1>Featured Collection<h1>

  </div>



  <div id="content" class="container">
    <!-- container Starts -->

    <div class="row">
      <!-- row Starts -->

      <?php

      getPro();

      ?>

    </div><!-- row Ends -->

  </div><!-- container Ends -->
  <!-- FOOTER -->
  <!-- <footer class="page-footer">
    <div class="footer-nav">
      <div class="container clearfix">



        <div class="footer-nav__col footer-nav__col--whybuy">
          <div class="footer-nav__heading">Why buy from us</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Secure shipping</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Testimonials</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Award winning</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Ethical trading</a>
            </li>
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--account">
          <div class="footer-nav__heading">Your account</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="logout.php" class="footer-nav__link">Sign out</a>
            </li>

            <li class="footer-nav__item">
              <a href="cart.php" class="footer-nav__link">View cart</a>
            </li>
            <li class="footer-nav__item">
              <a href="wishlist.php" class="footer-nav__link">View your whishlist</a>
            </li>
            <li class="footer-nav__item">
              <a href="my_orders.php" class="footer-nav__link">Track an order</a>
            </li>
            <li class="footer-nav__item">
              <a href="edit_account.php" class="footer-nav__link">Update information</a>
            </li>
          </ul>
        </div>


        <div class="footer-nav_col footer-nav_col--contacts">
          <div class="footer-nav__heading">Contact details</div>
          <address class="address">
            Vadodara
          </address>
          <div class="phone">
            Telephone:
            <a class="phone__number" href="tel:+916353294547">+91 63532 94547</a>
          </div>
          <div class="email">
            Email:
            <br>
            <a href="mailto:parekhkunal09@gmail.com" class="email__addr">parekhkunal09@gmail.com</a><br>

          </div>
        </div>
      </div>
    </div>



    <div class="page-footer__subline">
      <div class="container clearfix">

        <div class="copyright">
          &copy; <?php echo date("Y"); ?> CROPFIT Project&trade;
        </div>

      </div>
    </div>
  </footer> -->

  <?php

include("includes/footer.php");

?>
  </body>

  </html>