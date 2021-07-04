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
   require "includes/nav.inc.php";
   ?>
   <main>
      <div id="first-container" class="bg-light">
         <div class="max-width-container" style="margin-top: 74px;">
            <!-- <div class="row">
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
            </div> -->
            <div class="text-center m-auto color-black" style="max-width: 700px;">
               <h1>College of Communication and Information Technology</h1>
               <p class="color-black fontsize-13">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat nemo distinctio iure facilis ex illum quibusdam doloribus exercitationem similique quis beatae, odio dolorum quod alias aliquid officia eaque. Adipisci, facere.</p>
            </div>
            <div class=" color-black font-super--small text-center mb-2" id="featured-jobs">
               <a href="#" class="btn font-small p-1 m-1 shadow-sm">Web Developer</a>
               <a href="#" class="btn font-small p-1 m-1 shadow-sm">Web Designer</a>
               <a href="#" class="btn font-small p-1 m-1 shadow-sm">IOS Developer</a>
               <a href="#" class="btn font-small p-1 m-1 shadow-sm">Android Designer</a>
            </div>
            <div class="search-container fontsize-14 m-auto" style="max-width: 900px;">
               <form action="#">
                  <div class="row">
                     <div class="col-lg-3 px-1 mb-2">
                        <div class="input-group">
                           <div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
                              <span data-feather="search" class="color-black"></span>
                           </div>
                           <input type="text" class="form-control border-start-1 fontsize-14" placeholder="Job Title...">
                        </div>
                     </div>
                     <div class="col-lg-3 px-1 mb-2">
                        <div class="input-group">
                           <div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
                              <span data-feather="map-pin" class="color-black"></span>
                           </div>
                           <input type="text" class="form-control fontsize-14 border-start-1" id="location-autocomplete" placeholder="Location...">
                        </div>
                     </div>
                     <div class="col-lg-6 px-1 mb-2">
                        <div class="input-group">
                           <div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
                              <span data-feather="user" class="color-black"></span>
                           </div>

                           <div class="form-control" onclick="showSpecializationList()" style="max-height: 38px; overflow: hidden;">
                              <span class="color-black fontsize-13" id="specialization-input">Specialization</span>
                              <span data-feather="chevron-down" class="color-black" id="chevron"></span>
                           </div>
                           <input type="hidden" id="hiddenSpecialization" name="specialization">
                           <div class="option-container border rounded shadow-sm bg-white p-2" id="optionsSpecialization">
                              <ul class="p-0 color-black fontsize-13" id="list__ul__Specialization">
                                 <li class="p-2 rounded" id="ActuarialScience/Statistic" onclick="specialization_select(this.id)">Actuarial Science/Statistic</li>
                              </ul>
                           </div>

                           <style>
                              #chevron{
                                 position: absolute;
                                 right: 2px;
                                 top: 10px;
                              }
                              #optionsSpecialization{
                                 margin-top: 2.5rem;
                              }
                           </style>

                           <button class="btn btn-primary fontsize-14" type="button" style="z-index: 0;">
                              Search
                           </button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div id="second-container" class="bg-light">
         <div class="max-width-container">
            <h4 class="color-black text-center mt-5"><strong>What we can do</strong></h4>
            <p class="text-center mb-2 color-light fontsize-14">Lorem, ipsum dolor sit amet consectetur adipisicing</p>
            <div class="row p-3 justify-content-center">
               <div class="col-md-3 con-us">
                  <div class=" border column-container mb-2 p-4 rounded">
                     <a href="#">
                        <div class="d-flex justify-content-center">
                           <div class="image-container round bg-primary">
                              <span class="color-white" data-feather="compass"></span>
                           </div>
                        </div>
                     </a>
                     <div class="text-center">
                        <h6 class="color-black font-600 mt-2"><a href="#"> View Alumni</a></h6>
                        <p class="mt-0 color-light fontsize-13">(0000 Alumni)</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 con-us">
                  <div class=" border column-container mb-2 p-4 rounded">
                     <a href="#">
                        <div class="d-flex justify-content-center">
                           <div class="image-container round" style="background-color: #26ae61;">
                              <span class="color-white" data-feather="search"></span>
                           </div>
                        </div>
                     </a>
                     <div class="text-center">
                        <h6 class="color-black font-600 mt-2"><a href="#">Find a Job</a></h6>
                        <p class="mt-0 color-light fontsize-13">(0000 Jobs)</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 con-us">
                  <div class=" border column-container mb-2 p-4 rounded">
                     <a href="#">
                        <div class="d-flex justify-content-center">
                           <div class="image-container round" style="background-color: #ff8000;">
                              <span class="color-white" data-feather="check-circle"></span>
                           </div>
                        </div>
                     </a>
                     <div class="text-center">
                        <h6 class="color-black font-600 mt-2"><a href="#"> Employer Profiles</a></h6>
                        <p class="mt-0 color-light fontsize-13">(0000 Employers)</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 con-us">
                  <div class=" border column-container mb-2 p-4 rounded">
                     <a href="#">
                        <div class="d-flex justify-content-center">
                           <div class="image-container round" style="background-color:#fbc1f0;">
                              <span class="color-white" data-feather="calendar"></span>
                           </div>
                        </div>
                     </a>
                     <div class="text-center">
                        <h6 class="color-black font-600 mt-2"><a href="#">College Activities</a></h6>
                        <p class="mt-3 color-light fontsize-13">(0000 Activities)</p>

                     </div>
                  </div>
               </div>
               <div class="col-md-3 con-us">
                  <div class=" border column-container mb-2 p-4 rounded">
                     <a href="#">
                        <div class="d-flex justify-content-center">
                           <div class="image-container round" style="background-color: #40e0d0;">
                              <span class="color-white" data-feather="book-open"></span>
                           </div>
                        </div>
                     </a>
                     <div class="text-center">
                        <h6 class="color-black font-600 mt-2"><a href="#">Forum</a></h6>
                        <p class="mt-0 color-light fontsize-13">(0000 Post)</p>

                     </div>
                  </div>
               </div>
               <div class="col-md-3 con-us">
                  <div class=" border column-container mb-2 p-4 rounded">
                     <a href="#">
                        <div class="d-flex justify-content-center">
                           <div class="image-container round" style="background-color:#1d64b4;">
                              <span class="color-white" data-feather="clipboard"></span>
                           </div>
                        </div>
                     </a>
                     <div class="text-center">
                        <h6 class="color-black font-600 mt-2"><a href="#"> Post a Job</a></h6>
                        <p class="mt-0 color-light fontsize-13">(0000 Post)</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="third-container" class="bg-white">
         <!-- <div class="max-width-container">
            <h4 class="color-black text-center mt-2"><strong>Featured Jobs</strong></h4>
            <p class="text-center mb-2 color-light fontsize-14">Lorem, ipsum dolor sit amet consectetur adipisicing</p>
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
         </div> -->
         <div class="max-width-container">
            <h4 class="color-black text-center mt-2"><strong>Recently Posted Jobs</strong></h4>
            <p class="text-center mb-2 color-light fontsize-14">Lorem, ipsum dolor sit amet consectetur adipisicing</p>
            <div class="border rounded p-4 mb-2">
               <div class="row" id="application-row-container">
                  <div class="col-lg-4 pb-4" id="multiply-application">
                     <a href="Jobs/job-details.php" class="no-text-decor">
                        <div class="rounded p-4 bg-white shadow-sm-hover jobs bt-visible-primary-4 hover-bg-light position-relative">
                           <div class="image-container d-inline-block border rounded mb-2 background-thicker-light" style="height: 60px; width: 60px;"></div>
                           <span data-feather="bookmark" class="float-end hover-text-primary" style="height: 22px; width: 22px;"></span>
                           <h6 class="mb-0 color-black">Software Developer</h6>
                           <p class="fontsize-13 color-black mb-3">Company Name</p>
                           <p class="fontsize-13 color-black m-0">Vigan City Ilocos Sur</p>
                           <p class="fontsize-13 color-black mb-3 font-500">PHP 20-30k Monthly</p>
                           <ul class="mb-2">
                              <li class="fontsize-13 color-black bullets">Front End Development</li>
                              <li class="fontsize-13 color-black bullets">Back End Development</li>
                           </ul>
                           <p class="fontsize-13 color-light mb-0">Type: Full Time</p>
                           <div class="position-absolute date-posted">
                              <p class="font-super--small color-light m-0 text-end">Date Posted: 0/0/2021</p>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <script>
               for (i = 0; i < 5; i++) {
                  const Mydiv = document.getElementById("multiply-application");
                  var divclone = Mydiv.cloneNode(true);
                  var parentcon = document.getElementById("application-row-container");
                  parentcon.appendChild(divclone);
               }
            </script>
            <div class="d-flex justify-content-end">
               <nav aria-label="...">
                  <ul class="pagination">
                     <li class="page-item disabled">
                        <a class="page-link fontsize-14" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                     </li>
                     <li class="page-item active"><a class="page-link fontsize-14" href="#">1</a></li>
                     <li class="page-item" aria-current="page">
                        <a class="page-link fontsize-14" href="#">2</a>
                     </li>
                     <li class="page-item fontsize-14"><a class="page-link" href="#">3</a></li>
                     <li class="page-item fontsize-14">
                        <a class="page-link fontsize-14" href="#">Next</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      <div id="fourth-container">
         <div class="max-width-container">
            <h4 class="color-black text-center mb-5 m-auto" style="max-width: 800px;">
               <strong>Successful Graduates of the College of Communication and Information Technology</strong>
            </h4>
            <div class="row justify-content-center mb-5">
               <div class="col-md-6 d-flex align-items-center justify-content-center">
                  <div class="image-container">

                  </div>
               </div>
               <div class="col-md-6 p-5 color-black">
                  <p class="mb-1 font-500">Jerome Cabrera</p>
                  <div class="border-bottom text-start color-black fontsize-14 mb-4">
                     <div class="d-flex mb-3 align-items-center color-black">
                        <span data-feather="users" class="me-2"></span>
                        <h6 class="font-500 mb-0">Education</h6>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">University:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">University of Northern Philippines</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">College:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">College of Communication and Information Technology</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Course:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">BS Information Technology</p>
                        </div>
                     </div>
                  </div>
                  <div class="border-bottom text-start color-black fontsize-14 mb-4">
                     <div class="d-flex mb-3 align-items-center color-black">
                        <span data-feather="briefcase" class="me-2"></span>
                        <h6 class="font-500 mb-0">Employment</h6>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Status:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">Student</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Company:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">N/A</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Position:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">N/A</p>
                        </div>
                     </div>
                  </div>
                  <a href="#" type="button" class="btn btn-primary fontsize-14 font-500">View Full Details</a>
               </div>
               <div class="col-md-6 p-5 color-black">
                  <p class="mb-1 font-500">Jigs Cxyrel Crisologo</p>
                  <div class="border-bottom text-start color-black fontsize-14 mb-4">
                     <div class="d-flex mb-3 align-items-center color-black">
                        <span data-feather="users" class="me-2"></span>
                        <h6 class="font-500 mb-0">Education</h6>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">University:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">University of Northern Philippines</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">College:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">College of Communication and Information Technology</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Course:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">BS Information Technology</p>
                        </div>
                     </div>
                  </div>
                  <div class="border-bottom text-start color-black fontsize-14 mb-4">
                     <div class="d-flex mb-3 align-items-center color-black">
                        <span data-feather="briefcase" class="me-2"></span>
                        <h6 class="font-500 mb-0">Employment</h6>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Status:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">Student</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Company:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">N/A</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Position:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">N/A</p>
                        </div>
                     </div>
                  </div>
                  <a href="#" type="button" class="btn btn-primary fontsize-14 font-500">View Full Details</a>
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
                  <p class="mb-1 font-500">Kathleen Joy Bernal</p>
                  <div class="border-bottom text-start color-black fontsize-14 mb-4">
                     <div class="d-flex mb-3 align-items-center color-black">
                        <span data-feather="users" class="me-2"></span>
                        <h6 class="font-500 mb-0">Education</h6>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">University:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">University of Northern Philippines</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">College:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">College of Communication and Information Technology</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Course:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">BS Information Technology</p>
                        </div>
                     </div>
                  </div>
                  <div class="border-bottom text-start color-black fontsize-14 mb-4">
                     <div class="d-flex mb-3 align-items-center color-black">
                        <span data-feather="briefcase" class="me-2"></span>
                        <h6 class="font-500 mb-0">Employment</h6>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Status:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">Student</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Company:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">N/A</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Position:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">N/A</p>
                        </div>
                     </div>
                  </div>
                  <a href="#" type="button" class="btn btn-primary fontsize-14 font-500">View Full Details</a>
               </div>
               <div class="col-md-6 p-5">
                  <p class="mb-1 font-500">Mhark Alfred Diaz</p>
                  <div class="border-bottom text-start color-black fontsize-14 mb-4">
                     <div class="d-flex mb-3 align-items-center color-black">
                        <span data-feather="users" class="me-2"></span>
                        <h6 class="font-500 mb-0">Education</h6>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">University:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">University of Northern Philippines</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">College:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">College of Communication and Information Technology</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Course:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">BS Information Technology</p>
                        </div>
                     </div>
                  </div>
                  <div class="border-bottom text-start color-black fontsize-14 mb-4">
                     <div class="d-flex mb-3 align-items-center color-black">
                        <span data-feather="briefcase" class="me-2"></span>
                        <h6 class="font-500 mb-0">Employment</h6>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Status:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">Student</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Company:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">N/A</p>
                        </div>
                     </div>
                     <div class="row mb-2">
                        <div class="col-lg-2">
                           <p class="color-light fontsize-13 mb-0">Position:</p>
                        </div>
                        <div class="col-lg-10">
                           <p class="color-black fontsize-14 mb-0">N/A</p>
                        </div>
                     </div>
                  </div>
                  <a href="#" type="button" class="btn btn-primary fontsize-14 font-500">View Full Details</a>
               </div>
               <div class="col-md-6 d-flex align-items-center justify-content-center">
                  <div class="image-container">

                  </div>
               </div>
            </div>
            <div class="mt-5 text-center pt-5">
               <a href="#" class="btn btn-primary fontsize-14 font-500">View More</a>
            </div>
         </div>
      </div>
      <div id="fifth-container" class="background-blue">
         <div class="max-width-container">
            <h5 class="color-white text-center"><strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                  Deleniti harum beatae mollitia? Odit </strong></h5>
            <button type="button" class="btn btn-light px-5 py-2 fontsize-14 font-500 d-block m-auto mt-4 color-black" id="l-more-btn">
               Meet our Team
            </button>
         </div>
      </div>
      <div class="alert alert-light border alert-dismissible fade show d-inline-block shadow" role="alert" id="index-alert" style="z-index:20;">
         <a href="#" class="no-text-decor color-black fontsize-13"><strong>Welcome!</strong> Need Any Help?</a>
         <a type="button" class="btn-close" data-bs-dismiss="alert" a Fria-label="Close"></a>
      </div>
   </main>
   <?php
   require "html/footer.html";
   ?>
   <script src="javascript/functions.js"></script>
   <script src="javascript/scroll.js"></script>
   <script>
      loadPage();
      feather.replace();
      document.getElementById('index-link').classList.toggle('active');
      document.title = "CCIT Alumni Tracing and Job Portal";
      GetSpecializationList();
   </script>
</body>

</html>