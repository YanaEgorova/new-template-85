<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>



  <div class="wrapper">
    <div class="header__wrapper">
      <div class="container">
     
     
        <header class="header">
         
           
            <div class="header__top">
              <div class="header__top-box">
              <button class="header__btn js_menu-btn">
                <span></span>
              </button>
              <a href="./index.html" class="header__logo logo js_website-name"></a>
            </div>
            <a href="./shop.html" class="btn">my cart <span class="cart__span js_cart__span"></span></a>
              
            
    
                  <nav class="nav js_menu">
                    <ul class="nav__list">
                      <li class="nav__item">
                        <a href="./purchase.html" class="nav__link">Terms of Purchase</a>
                      </li>
                      <li class="nav__item">
                        <a href="./use.html" class="nav__link">Terms of Use</a>
                      </li>
                      <li class="nav__item">
                        <a href="./contacts.html" class="nav__link">Contact Us</a>
                      </li>
                      <li class="nav__item">
                        <a href="./privacy.html" class="nav__link">Privacy Notice</a>
                      </li>
                      <li class="nav__item">
                        <a href="./return.html" class="nav__link">Return Policy</a>
                      </li>
                      <li class="nav__item">
                        <a href="./shipping.html" class="nav__link">Shipping Policy</a>
                      </li>
                    </ul>
                  </nav>
            
 
          
          </div>
        </header>
     
      </div>
    </div>

    <main class="main bg-main">
      <div class="thank-you__wrapper" >
        <section class="thank-you">
          <div class="container">
              <div class="block">
                <h1 class="title">Thank you</h1>
                <p class="text">Your order was completed successfully!</p>
                <?php if($_GET["order_id"]){ ?> 
      <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
    <?php } ?>
              </div>
          </div>
        </section>
    </div>
    </main>

    <div class="footer__wrapper">
      <footer class="footer">
          <div class="container">
            <div class="footer__block">
              <p class="footer__title">Policies</p>
              <ul class="footer__list">
                <li class="footer__item">
                  <a href="./purchase.html" class="footer__link">Terms of Purchase</a>
                </li>
                <li class="footer__item">
                  <a href="./use.html" class="footer__link">Terms of Use</a>
                </li>
                <li class="footer__item">
                  <a href="./contacts.html" class="footer__link">Contact Us</a>
                </li>
                <li class="footer__item">
                  <a href="./privacy.html" class="footer__link">Privacy Notice</a>
                </li>
                <li class="footer__item">
                  <a href="./return.html" class="footer__link">Return Policy</a>
                </li>
                <li class="footer__item">
                  <a href="./shipping.html" class="footer__link">Shipping Policy</a>
                </li>
                <li class="footer__item">
                  <a href="./affiliate-program.html" class="footer__link">Affiliate Program</a>
                </li>
              </ul>
            </div>
              <div class="footer__block">
                <p class="footer__title">Our Contacts</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <span class="text  js_website-address"></span>
                   </li>
                   <li class="footer__item">
                    <a href="" class="footer__link js_website-email"></a>
                    </li>
                    <li class="footer__item">
                      <a href="" class="footer__link js_website-phone"></a>
                    </li>
                </ul>
              </div>
              <div class="footer__block footer__block--right">
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./index.html" class="footer__logo logo js_website-name"></a>
                  </li>
                  <li class="footer__item">
                    <p class="text js_website-corp"></p>
                  </li>
                  <li class="footer__item">
                    <span class="footer__span">© All rights reserved</span>
                  </li>
                </ul>
              </div>
          </div>
    </footer>
    </div>
  </div>

  <script type='text/javascript' src='https://thebestproductmanager.com/products/prices-nxg-object'></script>
  <script type="module" src="./js/on-load.js"></script>
  <script type="module" src="./js/website-data.js"></script>
  <script>
    const menuBtn = document.querySelector('.js_menu-btn');
    const menu = document.querySelector('.js_menu');
    menuBtn.addEventListener('click', () => {
      menuBtn.classList.toggle('active');
      menu.classList.toggle('open-menu');
      document.body.classList.toggle('open-menu');
    })
  </script>
</body>

</html>