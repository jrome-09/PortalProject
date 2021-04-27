<?php
require "html/head.html";
?>

<body>
   <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
      <div class="spinner-border text-primary" role="status">
         <span class="visually-hidden">Loading...</span>
      </div>
   </div>
   <?php
   require "html/script.html";
   require "navigation.php";
   ?>
   <main>
      <div id="first-container" class="bg-light">
         <div class="max-width-container">
            <div class="row">
               <div class="col-md-7" id="index-text">
                  <h1 class="mt-5 color-white"><strong>College of<br>Communication and<br>Information Technology</strong></h1>
                  <small class="color-white">
                     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti harum beatae mollitia?
                        Odit illo, <br> tenetur porro iusto maiores expedita ut saepe.</p>
                     <div class="font-small mb-2" id="featured-jobs">
                        Featured Job Titles:
                        <a href="#" class="btn color-white font-small p-1 m-1 shadow">Web Developer</a>
                        <a href="#" class="btn color-white font-small p-1 m-1 shadow">Web Designer</a>
                        <a href="#" class="btn color-white font-small p-1 m-1 shadow">IOS Developer</a>
                        <a href="#" class="btn color-white font-small p-1 m-1 shadow">Android Designer</a>
                     </div>
                  </small>
                  <div class="d-flex shadow">
                     <input type="text" id="jobsearch-input" class="form-control" placeholder="Search Job..." aria-label="Username" aria-describedby="basic-addon1" style="width: 86%;">
                     <div class="input-group">
                        <select class="form-select" id="location-select" aria-label="Example select with button addon">
                           <option selected>Location</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                        <button class="btn btn-primary" type="button" id="search-btn02">
                           <span data-feather="search" class="color-white"></span></button>
                     </div>
                  </div>
               </div>
               <div class="col-md-5" id="index-right">
                  <div id="circle01" class="round image-container">

                  </div>

               </div>
            </div>
         </div>
      </div>
      <div id="second-container" class="bg-light">
         <div class="max-width-container">
            <h4 class="color-black text-center mt-5"><strong>What we can do</strong></h4>
            <p class="text-center mb-2 color-light">Lorem, ipsum dolor sit amet consectetur adipisicing</p>
            <div class="row p-3">
               <div class="col-lg-3 border column-container p-4">
                  <a href="#" class="no-text-decor column-container-a">
                     <div class="d-flex justify-content-center">
                        <div class="image-container round bg-primary">
                           <span class="color-white" data-feather="compass"></span>
                        </div>
                     </div>
                     <div class="text-center">
                        <small>
                           <h5 class="color-black font-600 mt-2"><small>View Alumni</small></h5>
                           <p class="mt-3 color-light"><small>(0000 Alumni)</small></p>
                        </small>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 border column-container p-4">
                  <a href="#" class="no-text-decor column-container-a">
                     <div class="d-flex justify-content-center">
                        <div class="image-container round" style="background-color: #26ae61;">
                           <span class="color-white" data-feather="search"></span>
                        </div>
                     </div>
                     <div class="text-center">
                        <small>
                           <h5 class="color-black font-600 mt-2"><small>Find a Job</small></h5>
                           <p class="mt-3 color-light"><small>(0000 Jobs)</small></p>
                        </small>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 border column-container p-4">
                  <a href="#" class="no-text-decor column-container-a">
                     <div class="d-flex justify-content-center">
                        <div class="image-container round" style="background-color: #ff8000;">
                           <span class="color-white" data-feather="check-circle"></span>
                        </div>
                     </div>
                     <div class="text-center">
                        <small>
                           <h5 class="color-black font-600 mt-2"><small>Legit Employer</small></h5>
                           <p class="mt-3 color-light"><small>(0000 Employers)</small></p>
                        </small>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 border column-container p-4">
                  <a href="#" class="no-text-decor column-container-a">
                     <div class="d-flex justify-content-center">
                        <div class="image-container round" style="background-color:#fbc1f0;">
                           <span class="color-white" data-feather="calendar"></span>
                        </div>
                     </div>
                     <div class="text-center">
                        <small>
                           <h5 class="color-black font-600 mt-2"><small>College Activities</small></h5>
                           <p class="mt-3 color-light"><small>(0000 Activities)</small></p>
                        </small>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 border column-container p-4">
                  <a href="#" class="no-text-decor column-container-a">
                     <div class="d-flex justify-content-center">
                        <div class="image-container round" style="background-color: #40e0d0;">
                           <span class="color-white" data-feather="book-open"></span>
                        </div>
                     </div>
                     <div class="text-center">
                        <small>
                           <h5 class="color-black font-600 mt-2"><small>Forum</small></h5>
                           <p class="mt-3 color-light"><small>(0000 Post)</small></p>
                        </small>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 border column-container p-4">
                  <a href="#" class="no-text-decor column-container-a">
                     <div class="d-flex justify-content-center">
                        <div class="image-container round" style="background-color:#1d64b4;">
                           <span class="color-white" data-feather="clipboard"></span>
                        </div>
                     </div>
                     <div class="text-center">
                        <small>
                           <h5 class="color-black font-600 mt-2"><small>Post a Job</small></h5>
                           <p class="mt-3 color-light"><small>(0000 Post)</small></p>
                        </small>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div id="third-container" class="bg-white">
         <div class="max-width-container">
            <h4 class="color-black text-center mt-2"><strong>Featured Jobs</strong></h4>
            <p class="text-center mb-2 color-light">Lorem, ipsum dolor sit amet consectetur adipisicing</p>
            <div class="row">
               <div class="col-lg-4">
                  <div class="card shadow-sm p-4 d-flex flex-row">
                     <div class="rounded shadow-sm">
                        <img src="Images/svg/python.svg" alt="">
                     </div>
                     <section class="ps-3">
                        <h5><a href="#" class="color-black no-text-decor font-600 hover-text-primary">Software
                              Engineer</a></h5>
                        <small>
                           <p class="color-darker-light mb-1 font-600">CCIT</p>
                           <p class="color-light mb-1"><span data-feather="map-pin"></span>Vigan City</p>
                           <p class="color-light mb-2"><span data-feather="user"></span>Jerome Cabrera</p>
                           <a href="#" class="no-text-decor part-time px-3 py-1 rounded-pill shadow-hover">PART TIME</a>
                        </small>
                     </section>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card shadow-sm p-4 d-flex flex-row">
                     <div class="rounded shadow-sm">
                        <img src="Images/svg/react.svg" alt="">
                     </div>
                     <section class="ps-3">
                        <h5><a href="#" class="color-black no-text-decor font-600 hover-text-primary">Web Designer</a>
                        </h5>
                        <small>
                           <p class="color-darker-light mb-1 font-600">CCIT</p>
                           <p class="color-light mb-1"><span data-feather="map-pin"></span>Vigan City</p>
                           <p class="color-light mb-2"><span data-feather="user"></span>Kathleen Joy Bernal</p>
                           <a href="#" class="no-text-decor full-time px-3 py-1 rounded-pill shadow-hover">Full TIME</a>
                        </small>
                     </section>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card shadow-sm p-4 d-flex flex-row">
                     <div class="rounded shadow-sm">
                        <img src="images/svg/palette.svg" alt="">
                     </div>
                     <section class="ps-3">
                        <h5><a href="#" class="color-black no-text-decor font-600 hover-text-primary">Analyst</a></h5>
                        <small>
                           <p class="color-darker-light mb-1 font-600">CCIT</p>
                           <p class="color-light mb-1"><span data-feather="map-pin"></span>Vigan City</p>
                           <p class="color-light mb-2"><span data-feather="user"></span>Jigs Cxyrel Crisologo</p>
                           <a href="#" class="no-text-decor full-time px-3 py-1 rounded-pill shadow-hover">FULL TIME</a>
                        </small>
                     </section>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card shadow-sm p-4 d-flex flex-row">
                     <div class="rounded shadow-sm">
                        <img src="Images/svg/html-5.svg" alt="">
                     </div>
                     <section class="ps-3">
                        <h5><a href="#" class="color-black no-text-decor font-600 hover-text-primary">Web Developer</a>
                        </h5>
                        <small>
                           <p class="color-darker-light mb-1 font-600">CCIT</p>
                           <p class="color-light mb-1"><span data-feather="map-pin"></span>Vigan City</p>
                           <p class="color-light mb-2"><span data-feather="user"></span>Mhark Alfred Diaz</p>
                           <a href="#" class="no-text-decor part-time px-3 py-1 rounded-pill shadow-hover">PART TIME</a>
                        </small>
                     </section>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card shadow-sm p-4 d-flex flex-row">
                     <div class="rounded shadow-sm">
                        <img src="Images/svg/graphic-designer.svg" alt="">
                     </div>
                     <section class="ps-3">
                        <h5><a href="#" class="color-black no-text-decor font-600 hover-text-primary">Graphic
                              Designer</a></h5>
                        <small>
                           <p class="color-darker-light mb-1 font-600">CCIT</p>
                           <p class="color-light mb-1"><span data-feather="map-pin"></span>Vigan City</p>
                           <p class="color-light mb-2"><span data-feather="user"></span>Jigs Cxyrel Crisologo</p>
                           <a href="#" class="no-text-decor full-time px-3 py-1 rounded-pill shadow-hover">FULL TIME</a>
                        </small>
                     </section>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card shadow-sm p-4 d-flex flex-row">
                     <div class="rounded shadow-sm">
                        <img src="images/svg/python.svg" alt="">
                     </div>
                     <section class="ps-3">
                        <h5><a href="#" class="color-black no-text-decor font-600 hover-text-primary">Software
                              Engineer</a></h5>
                        <small>
                           <p class="color-darker-light mb-1 font-600">CCIT</p>
                           <p class="color-light mb-1"><span data-feather="map-pin"></span>Vigan City</p>
                           <p class="color-light mb-2"><span data-feather="user"></span>Kathleen Joy Bernal</p>
                           <a href="#" class="no-text-decor part-time px-3 py-1 rounded-pill shadow-hover">PART TIME</a>
                        </small>
                     </section>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="fourth-container">
         <div class="max-width-container">
            <h5 class="color-black text-center mb-5">
               <strong>Successful Graduates</strong>
            </h5>
            <div class="row justify-content-center">
               <div class="col-md-6 d-flex align-items-center justify-content-center">
                  <div class="image-container">

                  </div>
               </div>
               <div class="col-md-6 p-5 color-black">
                  <h6 class="color-black">Lorem ipsum dolor sit amet.</h6>
                  <small>
                     <p class="color-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut illum dolor
                        quibusdam, sint nulla
                        adipisci beatae dicta vitae voluptate, quasi architecto nam quidem ea pariatur, perspiciatis
                        magnam in? Necessitatibus, ducimus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                        illum dolor quibusdam, sint nulla
                        adipisci beatae dicta vitae voluptate, quasi architecto nam quidem ea pariatur, perspiciatis
                        magnam in? Necessitatibus, ducimus.
                     </p>
                  </small>
               </div>
               <div class="col-md-6 p-5 color-black">
                  <h6 class="color-black">Lorem ipsum dolor sit amet.</h6>
                  <small>
                     <p class="color-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut illum dolor
                        quibusdam, sint nulla
                        adipisci beatae dicta vitae voluptate, quasi architecto nam quidem ea pariatur, perspiciatis
                        magnam in? Necessitatibus, ducimus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                        illum dolor quibusdam, sint nulla
                        adipisci beatae dicta vitae voluptate, quasi architecto nam quidem ea pariatur, perspiciatis
                        magnam in? Necessitatibus, ducimus.
                     </p>
                  </small>
               </div>
               <div class="col-md-6 d-flex align-items-center justify-content-center">
                  <div class="image-container">

                  </div>
               </div>
               <div class="col-md-6 d-flex align-items-center justify-content-center">
                  <div class="image-container">

                  </div>
               </div>
               <div class="col-md-6 p-5">
                  <h6 class="color-black">Lorem ipsum dolor sit amet.</h6>
                  <small>
                     <p class="color-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut illum dolor
                        quibusdam, sint nulla
                        adipisci beatae dicta vitae voluptate, quasi architecto nam quidem ea pariatur, perspiciatis
                        magnam in? Necessitatibus, ducimus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                        illum dolor quibusdam, sint nulla
                        adipisci beatae dicta vitae voluptate, quasi architecto nam quidem ea pariatur, perspiciatis
                        magnam in? Necessitatibus, ducimus.
                     </p>
                  </small>
               </div>
            </div>
            <div class="mt-5 text-center">
               <a href="#" class="btn btn-primary">View More</a>
            </div>
         </div>
      </div>
      <div id="fifth-container" class="background-blue">
         <div class="max-width-container">
            <h4 class="color-white text-center"><strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                  Deleniti harum beatae mollitia? Odit </strong></h4>
            <button type="button" class="btn btn-light px-5 py-2 font-500 d-block m-auto mt-4 color-black" id="l-more-btn">
               <small>Meet our Team</small>
            </button>
         </div>
      </div>
      <div class="alert alert-light border alert-dismissible fade show d-inline-block shadow" role="alert" id="index-alert">
         <small>
            <a href="#" class="no-text-decor color-black"><strong>Welcome!</strong> Need Any Help?</a>
            <a type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
         </small>
      </div>
   </main>
   <?php
   require "html/footer.html";
   ?>
   <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
   <script src="javascript/functions.js"></script>
   <script src="javascript/scroll.js"></script>
   <script>
      loadPage();
      feather.replace();
      const nav_id = document.getElementById('nav-head');
      const home_id = document.getElementById('home');
      nav_id.classList.add("background-blue");
      home_id.classList.add("opened");
   </script>
</body>

</html>