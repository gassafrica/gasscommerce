<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/dev.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to our store, where passion meets convenience. We believe in creating a seamless shopping experience, offering a curated selection of high-quality products that cater to your every need. From the latest fashion trends to cutting-edge technology, we strive to bring you the best at your fingertips. Our journey began with a simple vision: to redefine online shopping by blending style, innovation, and customer satisfaction. Dive into a world of unparalleled choices, where each click opens doors to inspiration and possibilities. Here, we're not just an online store; we're your go-to destination for a delightful shopping journey. Join us as we embark on this exciting adventure together, where every purchase is a step towards enhancing your lifestyle.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>











<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>