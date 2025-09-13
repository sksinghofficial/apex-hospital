<footer id="footer" class="footer text-white container" style="background-color:#E53935;">
  
  <!-- background full rahega -->
  <div class="container"> <!-- 👈 yaha content ko limit kiya -->
    <div class="row gy-4">

      <!-- Logo + Social -->
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="<?php echo home_url(); ?>" class="logo d-flex align-items-center text-white">
          <span class="sitename"><?php bloginfo('name'); ?></span>
        </a>
        <p class="mt-3 mb-2">Providing quality healthcare with experienced specialists and modern facilities.</p>
        <div class="social-links d-flex mt-2">
          <a href="#" class="text-white me-2"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Useful Links -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h4 class="mb-2">Useful Links</h4>
        <ul class="list-unstyled mb-0">
          <li class="mb-1"><a href="<?php echo home_url(); ?>" class="text-white">Home</a></li>
          <li class="mb-1"><a href="<?php echo home_url('/about'); ?>" class="text-white">About us</a></li>
          <li class="mb-1"><a href="<?php echo home_url('/services'); ?>" class="text-white">Services</a></li>
          <li class="mb-1"><a href="#" class="text-white">Terms of service</a></li>
          <li><a href="#" class="text-white">Privacy policy</a></li>
        </ul>
      </div>

      <!-- Specialists -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h4 class="mb-2">Specialists</h4>
        <ul class="list-unstyled mb-0">
          <li class="mb-1"><a href="#" class="text-white">Oncology</a></li>
          <li class="mb-1"><a href="#" class="text-white">Surgery</a></li>
          <li class="mb-1"><a href="#" class="text-white">Emergency Medicine</a></li>
          <li class="mb-1"><a href="#" class="text-white">ENT</a></li>
          <li><a href="#" class="text-white">Urology</a></li>
        </ul>
      </div>

      <!-- Super Specialists -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h4 class="mb-2">Super Specialists</h4>
        <ul class="list-unstyled mb-0">
          <li class="mb-1"><a href="#" class="text-white">Cardiology</a></li>
          <li class="mb-1"><a href="#" class="text-white">Neurology</a></li>
          <li class="mb-1"><a href="#" class="text-white">Orthopedics</a></li>
          <li class="mb-1"><a href="#" class="text-white">Pediatrics</a></li>
          <li><a href="#" class="text-white">Dermatology</a></li>
        </ul>
      </div>

     <!-- Contact Us -->
		<div class="col-lg-2 col-md-3 footer-links">
        <h4 class="mb-2">Contact Us</h4>
        <ul class="list-unstyled mb-0">
          <li class="mb-1"><a href="#" class="text-white">Prakash Vihar Colony,</a></li>
          <li class="mb-1"><a href="#" class="text-white">Palwal, Palwalrural,</a></li>
          <li class="mb-1"><a href="#" class="text-white">Haryana 121102</a></li>
          <li class="mb-1"><a href="#" class="text-white"><strong>Phone:</strong> +91 9416636394</a></li>
          <li><a href="#" class="text-white"><strong>Email:</strong> info@apexhospital.com</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container text-center mt-3">
    <p class="mb-0">© <span><?php echo date('Y'); ?></span> 
      <strong class="px-1 sitename"><?php bloginfo('name'); ?></strong> All Rights Reserved
    </p>
  </div>
</footer>


 <!-- Scroll Top -->
 <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>

 <!-- Preloader -->
 <div id="preloader">
  
 </div>

 <?php wp_footer(); ?>
 </body>
 </html>