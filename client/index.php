<?php
session_start();
include('../client/inc/header.php');


?>

<section class="hero-section text-center">
  <div class="bkg"></div>
  <div class="h-100 d-flex w-50 justify-content-center align-self-center ms-auto me-auto">
    <div class="pt-5 mt-5 parallax">
      <div class="py-4 hero-header ">Welcome to Kade.lk</div>
      <div class="h3 text-light hero-intro">Shop variety of items including Laptops, Mobile Phones, TVs at the Lowest Price</div>
      <a class="btn btn-lg btn-outline-warning hero-button fw-bold mt-2" href="#productSection"> Start Shopping</a>
    </div>
  </div>
</section>

<div class="container pb-5 mb-5" id="productSection">
  <div class="text-black h1 fw-bold text-start py-4">Our Products</div>




  <?php

  get_products();



  ?>
</div>
</div>




</div>
<footer class="bg-dark text-center text-light position-relative">
  <div class="p-4">
    <div class="d-flex justify-content-around">
      <div class="w-50">
        <h5 class="text-uppercase text-start mb-3">About</h5>
        <p class="text-start">We're an e-commerce company that offers a wide variety of products for all your needs. We're dedicated to providing excellent customer service and a seamless online shopping experience. We are constantly updating our selection with new and exciting items. Thank you for choosing us as your go-to online retailer.</p>
      </div>
      <div class="text-start">
        <h5 class="text-uppercase text-start mb-3">Contact Us</h5>
        <div class="mb-1">
          Address: 57, 21 John Rodrigo Mawatha, Moratuwa 10400
        </div>
        <div>Tele: 091-112-5623</div>
      </div>
    </div>
  </div>
  <div class="text-center p-3 text-secondary" style="background-color: rgba(0, 0, 0, 0.3)">
    Copyright &copy; 1998-2022, Kade.lk
  </div>
</footer>
<script>
  window.addEventListener('scroll', function() {
    const parallax = document.querySelector('.parallax');
    let scrollPosition = window.pageYOffset;
    parallax.style.transform = 'translateY(' + scrollPosition * .4 + 'px)';
  });
</script>
</body>

</html>