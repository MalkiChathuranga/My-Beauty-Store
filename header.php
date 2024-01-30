<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- slick carousal -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css" integrity="sha512-+oRH6u1nDGSm3hH8poU85YFIVTdSnS2f+texdPGrURaJh8hzmhMiZrQth6l56P4ZQmxeZzd2DqVEMqQoJ8J89A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" integrity="sha512-aNH2ILn88yXgp/1dcFPt2/EkSNc03f9HBFX0rqX3Kw37+vjipi1pK3L9W08TZLhMg4Slk810sPLdJlNIjwygFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/solid.min.css" integrity="sha512-uj2QCZdpo8PSbRGL/g5mXek6HM/APd7k/B5Hx/rkVFPNOxAQMXD+t+bG4Zv8OAdUpydZTU3UHmyjjiHv2Ww0PA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/v4-font-face.min.css" integrity="sha512-hpWf+VbTLvBF+RSSdHLpJg+nchmQ3mk1+y9b/ICJSQdZt9B4v+zgZCsD54GAI8fV7MbFq7FhrdWgzPmxuluwsw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="inc/css/style.css">


  <title>Mybutylk.com</title>
</head>

<body>

  <section class="pd-main-nav">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="inc/img/logo1.png" /></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Who we are</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">sign in</a>
            </li>

            <li class="nav-item pd-nav-button">
              <a class="nav-link" href="#"><button>Buy Now</button></a>
            </li>

            <li class="nav-item pd-nav-wishlist">
              <a href="#"> <i class="fa-regular fa-heart"></i></a> <span>| </span>
            </li>

            <li class="nav-item pd-nav-cart">
              <a href="#" onclick="toggleCart()"> <i class="fa-sharp fa-solid fa-cart-shopping"></i> </a>

              <div class="pd-cart-dropdown" onmouseleave="hideCartDropdown()">

               
                 
              
            

                <hr />
                <div class="pd-c-d-total">
                  <h6>Total</h6>
                  <h3></h3>
                </div>

                <div class="pd-c-d-buttons">
                  <div class="pd-v-m-btn">
                    <a href="#">View Cart</a>
                  </div>

                  <div class="pd-v-m-btn">
                    <a href="#">Checkout</a>
                  </div>
                </div>


              </div>

            </li>

          </ul>



        </div>
      </nav>
    </div>
  </section>

  <script>
    function showCartDropdown() {
      var cartDropwdownEle = document.querySelector('.pd-cart-dropdown');
      cartDropwdownEle.classList.add('pd-show-dd');
    }

    function hideCartDropdown() {
      var cartDropwdownEle = document.querySelector('.pd-cart-dropdown');
      cartDropwdownEle.classList.remove('pd-show-dd');
      console.log('leave');
    }

    function toggleCart() {
      var cartDropwdownEle = document.querySelector('.pd-cart-dropdown');
      cartDropwdownEle.classList.toggle("pd-show-dd");
    }
  </script>