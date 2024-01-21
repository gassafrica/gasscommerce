<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="home">
      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="card"> <!-- Reduced card size -->
                  <div class="image">
                     <img src="images/home-img-1" alt="" style="width: 100%;"> <!-- Reduced image size -->
                     <span class="promo-text">upto 50% off</span>
                  </div>
                  <div class="content">
                     <h3>latest smartphones</h3>
                     <a href="shop.php" class="btn-small">Shop Now</a> <!-- Reduced button size -->
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="card"> <!-- Reduced card size -->
                  <div class="image">
                     <img src="images/home-img-2.png" alt="" style="width: 100%;"> <!-- Reduced image size -->
                     <span class="promo-text">upto 50% off</span>
                  </div>
                  <div class="content">
                     <h3>latest watches</h3>
                     <a href="shop.php" class="btn-small">Shop Now</a> <!-- Reduced button size -->
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="card"> <!-- Reduced card size -->
                  <div class="image">
                     <img src="images/home-img-3.png" alt="" style="width: 100%;"> <!-- Reduced image size -->
                     <span class="promo-text">upto 50% off</span>
                  </div>
                  <div class="content">
                     <h3>latest headsets</h3>
                     <a href="shop.php" class="btn-small">Shop Now</a> <!-- Reduced button size -->
                  </div>
               </div>
            </div>

         </div>

         <div class="swiper-pagination"></div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   <section class="latest-products">
   <h2 class="section-heading">Discover Our Latest Products</h2>

   <div class="swiper latest-products-slider">
      <div class="swiper-wrapper">

         <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
         $select_products->execute();
         if ($select_products->rowCount() > 0) {
            while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
         ?>
               <form action="" method="post" class="swiper-slide product-card">
                  <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                  <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                  <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                  <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
                  <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
                  <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
                  <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="<?= $fetch_product['name']; ?>">
                  <div class="product-name"><?= $fetch_product['name']; ?></div>
                  <div class="price-and-quantity">
                     <div class="price">$<?= $fetch_product['price']; ?>/-</div>
                     <input type="number" name="qty" class="quantity" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                  </div>
                  <input type="submit" value="Add to Cart" class="add-to-cart-btn" name="add_to_cart">
               </form>
         <?php
            }
         } else {
            echo '<p class="empty-message">No products added yet!</p>';
         }
         ?>

      </div>
      <div class="swiper-pagination"></div>
   </div>
</section>


   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".home-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
         },
      });

      var swiper = new Swiper(".products-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            550: {
               slidesPerView: 2,
            },
            768: {
               slidesPerView: 2,
            },
            1024: {
               slidesPerView: 3,
            },
         },
      });

   </script>

</body>

</html>
