</div>
</div>
<footer>
  <div class="container text-center">
    <div class="row">
      <div class="col columns">
        <ul class="navbar-nav l">
          <li class="nav-item">
            <a class="nav-link active footer-link" aria-current="page" href="#">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active footer-link" aria-current="page" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active footer-link" aria-current="page" href="#">About&nbsp;Us</a>
          </li>
        </ul>
        <div class="media">
          <a href="#">
            <img src="images/Icons/Instagram.png" alt="ig" width="30" height="30">
          </a>
          <a href="#">
            <img src="images/Icons/Facebook.png" alt="fb" width="30" height="30">
          </a>
          <a href="#">
            <img src="images/Icons/Twitter.png" alt="tw" width="30" height="30">
          </a>
        </div>
      </div>
      <div class="col columns">
        <div class="PM">
          <h5>Payment methods</h5>
          <img src="images/Icons/PaymentMethods.png" alt="payment">
        </div>
      </div>
      <div class="col columns">
        <a name="contacts" id="contacts">
          <h5>Contact with us</h5>
        </a><br>
        <div class="textcols">
          <div class="textcols one">
            <h5>Skate&nbsp;Shop&nbsp;store<br>Funnytie&nbsp;33,<br>13100 Hämeenlinna.<br>Webstore&nbsp;24/7</h5>
          </div>
          <div class="textcols two">
            <h5><a href="tel:+358405555555">040&nbsp;555&nbsp;5555</a><br>
              <a href="mailto:shop@skate-shop.fi">shop@skate-shop.fi</a><br>VAT&nbsp;id:&nbsp;FI32008000
            </h5>
          </div>
        </div>
      </div>
      <div class="col cloumns">
        <h5>Customer Benefits<h5><br>
        <ul>
          <li class="benefits">30-day return</li>
          <li class="benefits">Free shipping on orders over 100€</li>
          <li class="benefits">Fast shipping</li>
          <li class="benefits">SSL Secure Shopping</li>
        </ul>
      </div>
    </div>
  </div>
  <!--Bottom footer-->
  <div class="footer-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="d-flex justify-content-center">
          <div class="col-md-12 text-center">
            <p>&copy; 2023 Skate Shop</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
      <?php
      
      $fname = basename($_SERVER['PHP_SELF']);
      $last_modified = filemtime($fname);
      echo "Last modified on: " . date('l jS \o\f F Y, h:i:s A', $last_modified);
      ?>
      </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>