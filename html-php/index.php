<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/account-style.css" />
    <title>Zahy's market</title>
    <!-- Groceries of international quality -->

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
  </head>
  <body>
    <!-- ------------------------ HEADER ------------------------ -->
    <header class="top-header">
      <div class="container-header">
        <div class="container-header-logo-name">
          <div class="circle">
            <i class="ph-duotone ph-wave-sawtooth header-logo"></i>
          </div>
          <h1 class="h1-header">Zahy's market</h1>
        </div>
        <div class="navbar-container">
          <ul class="navbar-list navbar-list-top">
            <a href="#about-us"><li>About us</li></a>
            <a href="#footer"><li>Contacts</li></a>
          </ul>
          <ul class="navbar-list navbar-list-bottom">
            <a href="#recommended"><li>Fruits Vegetables</li></a>
            <a href="#recommended"><li>Bakery</li></a>
            <a href="#recommended"><li>Fresh Food</li></a>
            <a href="#recommended"><li>Food Cupboard</li></a>
            <a href="#recommended"><li>Drinks</li></a>
            <a href="#recommended"><li>Inspiration</li></a>
          </ul>
        </div>
        <div class="container-header-cart-account">
          
           
            <a href="
            <?php
              session_start();
              if(isset($_SESSION['loggedInUser'])) {
                echo "./account-logged-in.php";
              }
              else {
                echo "./account.php";
              } 
            ?>
            " class="header-anchor">
            <div class="container-header-icon-description">
              <ion-icon name="person-circle" class="cart-login-icon"></ion-icon>
              <span><?php              
              if(isset($_SESSION['loggedInUser'])) {
                echo $_SESSION['loggedInUser'];
              }
              else {
                echo "account";
              } 
            ?></span>
            </div>
            </a>
          

          <a href="#" class="header-anchor">
            <div class="container-header-icon-description">
              <ion-icon name="cart" class="cart-login-icon"></ion-icon>
              <span class="cart-text">Cart <?php 
              if(isset($_COOKIE['cart-cookie'])){
                echo '<span class="cart-items-text">'.$_COOKIE['cart-cookie'].'</span>';
              }
              ?></span>
            </div>
          </a>
        </div>
      </div>
      <div class="horizontal-line"></div>
    </header>

    <main>
      <!-- ------------------------ HERO SECTION ------------------------ -->
      <section class="hero-section">
        <div class="hero-section-container">
          <span class="market-header">Zahy's market</span>
          <h3 class="h3-header">Groceries of international quality</h3>
          <p class="hero-paragraph">
            Explore our wide selection of products and enjoy the best quality
            and freshness.
          </p>
          <p class="hero-paragraph">
            First time with us?
            <a class="anchor" href="#get-special-price"><span class="welcome-price">Get a special welcome price.</span></a>
          </p>
          <div class="hero-section-buttons">
            <a class="hero-anchor" href="#recommended">Start exploring</a>
            <a class="hero-anchor" href="#get-special-price"
              >Get special price</a
            >
          </div>
        </div>
      </section>

      <!-- ------------------------ RECOMMENDED ------------------------ -->
      <section id="recommended" class="section-recommended">
        <div class="container center-text">
          <span class="subheading">Recommended</span>
          <h2 class="h2-heading">Items you shouldn't miss</h2>
        </div>

        <div class="container carousel-container" id="carousel">
          <!-- ------------------------ ARROWS ------------------------ -->
          <button
            class="carousel-arrow-left-container"
            id="recommended-left-arrow"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="btn-icon"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.75 19.5L8.25 12l7.5-7.5"
              />
            </svg>
          </button>
          <button
            class="carousel-arrow-right-container"
            id="recommended-right-arrow"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="btn-icon"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8.25 4.5l7.5 7.5-7.5 7.5"
              ></path>
            </svg>
          </button>

          <!-- ------------------------ 1st CARD ------------------------ -->
          <div class="item-card item-card-new" id="first-card">
            <figure>
              <img
                class="item-card-img"
                src="../img/item-tomato.jpg"
                alt="Picture of tomatoes"
              />
            </figure>
            <div class="item-card-content">
              <p class="item-title">Tomatoes</p>
              <ul>
                <li>
                  <div>
                    <i class="ph-light ph-globe item-icon"></i
                    ><span>Spain</span>
                  </div>
                </li>
                <li>
                  <div>
                    <i class="ph-light ph-scales item-icon"></i
                    ><span>500 g</span>
                  </div>
                </li>
              </ul>
              <div class="item-checkout-container">
                <div class="item-checkout-top-container">
                  <span>59</span><span>CZK</span>
                </div>
                <div class="item-checkout-bottom-container">
                  <a href="./process-add-to-cart.php"
                    ><span>Add to cart</span><i class="ph ph-shopping-cart"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>

          <!-- ------------------------ 2nd CARD ------------------------ -->
          <div class="item-card item-card-best" id="second-card">
            <figure>
              <img
                class="item-card-img"
                src="../img/item-croissant.jpg"
                alt="Picture of corissant"
              />
            </figure>
            <div class="item-card-content">
              <p class="item-title">Croissant</p>
              <ul>
                <li>
                  <div>
                    <i class="ph-light ph-globe item-icon"></i
                    ><span>France</span>
                  </div>
                </li>
                <li>
                  <div>
                    <i class="ph-light ph-scales item-icon"></i
                    ><span>1 pcs (50 g)</span>
                  </div>
                </li>
              </ul>
              <div class="item-checkout-container">
                <div class="item-checkout-top-container">
                  <span>28</span><span>CZK</span>
                </div>
                <div class="item-checkout-bottom-container">
                  <a href="./process-add-to-cart.php"
                    ><span>Add to cart</span><i class="ph ph-shopping-cart"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>

          <!-- ------------------------ 3rd CARD ------------------------ -->
          <div class="item-card item-card-special" id="third-card">
            <figure>
              <img
                class="item-card-img"
                src="../img/item-tenderloin.jpg"
                alt="Picture of tenderloin"
              />
            </figure>

            <div class="item-card-content">
              <p class="item-title">Tenderloin</p>
              <ul>
                <li>
                  <div>
                    <i class="ph-light ph-globe item-icon"></i
                    ><span>Argentina</span>
                  </div>
                </li>
                <li>
                  <div>
                    <i class="ph-light ph-scales item-icon"></i
                    ><span>250 g</span>
                  </div>
                </li>
              </ul>
              <div class="item-checkout-container">
                <div class="item-checkout-top-container">
                  <span>499</span><span>CZK</span>
                </div>
                <div class="item-checkout-bottom-container">
                  <a href="./process-add-to-cart.php"
                    ><span>Add to cart</span><i class="ph ph-shopping-cart"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>

          <!-- ------------------------ 4th CARD ------------------------ -->
          <div class="item-card item-card-new" id="fourth-card">
            <figure>
              <img
                class="item-card-img"
                src="../img/item-clementine.jpg"
                alt="Picture of tenderloin"
              />
            </figure>

            <div class="item-card-content">
              <p class="item-title">Clementines</p>
              <ul>
                <li>
                  <div>
                    <i class="ph-light ph-globe item-icon"></i
                    ><span>Turkey</span>
                  </div>
                </li>
                <li>
                  <div>
                    <i class="ph-light ph-scales item-icon"></i
                    ><span>400 g</span>
                  </div>
                </li>
              </ul>
              <div class="item-checkout-container">
                <div class="item-checkout-top-container">
                  <span>45</span><span>CZK</span>
                </div>
                <div class="item-checkout-bottom-container">
                  <a href="./process-add-to-cart.php"
                    ><span>Add to cart</span><i class="ph ph-shopping-cart"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ------------------------ ABOUT US ------------------------ -->
      <section id="about-us" class="section-about-us">
        <div class="container center-text">
          <span class="subheading">About us</span>
          <h2 class="h2-heading">With love from Prague since 2023</h2>
        </div>
        <div class="container about-us-container">
          <img
            class="about-us-img"
            src="../img/img-about-us.jpg"
            alt="Man with food basket"
          />
          <div>
            <blockquote class="about-us-text">
              It all started in a small shop in Prague with the idea of making
              food of excellent quality available to all. Unlike multinational
              companies, we do not prioritize profit, but take care to offer our
              customers selected first-class products from all over Europe and
              beyond. Try it out, you will feel the difference!
            </blockquote>
            <p class="about-us-sign">— Mr. Zahy, founder of Zahy's market</p>
          </div>
        </div>
      </section>

      <!-- ------------------------ SPECIAL PRICE ------------------------ -->
      <section id="get-special-price" class="section-get-special-price">
        <div class="container center-text">
          <span class="subheading">Get special price</span>
          <h2 class="h2-heading">First time? We will give you 20% discount</h2>
        </div>
        <div class="container get-special-price-container">
          <div class="special-price-gift-text-container">
            <i class="ph-light ph-gift"></i>
            <p class="get-special-price-text">
              Sign up for our newsletter and get 20% off your first order.<br />Enjoy
              your first shopping experience with Zahy's market.
            </p>
          </div>
          <form class="form-special-price" method="post" action="./process-subscribe.php">
            <div>
              <label for="input-email">E-mail address</label>
              <input
                type="email"
                id="input-email"
                name="subscribe-email"
                placeholder="zahy@market.cz"
                required
              />
            </div>
            <button type="submit" class="btn-subscribe">Submit</button>
          </form>
        </div>
      </section>
    </main>

    <!-- ------------------------ FOOTER ------------------------ -->
    <footer class="bottom-footer" id="footer">
      <div>
        <h4 class="footer-marketname">Zahy's market</h4>
        <div class="footer-info-section">
          <span class="footer-info-name">Adress</span>
          <span class="footer-info-detail">Na Bateriích 55, Prague 6, 162 00, Czech Republic</span>
        </div>        
        <div class="footer-info-section">
          <span class="footer-info-name">Phone</span>
          <span class="footer-info-detail">+420 225 897 416</span>
        </div>
        <div class="footer-info-section">
          <span class="footer-info-name">E-mail</span>
          <span class="footer-info-detail">zahy@market.cz</span>
        </div>
        <div class="footer-info-section">
          <span class="footer-info-name">Bussiness Hours</span>
          <span class="footer-info-detail">Mo-Fr 9-17</span>
        </div>
      </div>
    </footer>

    <!-- ------------------------ SCRIPTS ------------------------ -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script type="text/javascript" src="../js/carousel.js"></script>
  </body>
</html>
