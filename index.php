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
   //require "includes/nav.inc.php";
   require "includes/nav.php";
   ?>
   <main>
      <!-- <div id="first-container" class="bg-light position-relative">
         <div class="bg-full">
         </div>
         <div class="max-width-container position-relative" style="margin-top: 74px;">
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

                           <div class="form-control" onclick="showSpecializationList()" style="max-height: 35px; overflow: hidden;">
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
                              #chevron {
                                 position: absolute;
                                 right: 2px;
                                 top: 10px;
                              }

                              #optionsSpecialization {
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
      </div> -->
      <div class="max-width-container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="color-black font-700 mt-5"> CCIT JOB PORTAL AND ALUMNI TRACING SYSTEM</h1>
               <p class="color-black fontsize-13"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti atque fugiat voluptate quo ipsum tenetur sit dolorem, nemo reprehenderit quaerat nihil iste quae ullam explicabo veniam! Minus sapiente vel dignissimos.</p>
               <div class="btn bg-cp2 fontsize-13 text-white">Register now</div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
               <div class="image-container overflow-visible" style="height: 400px; width: 400px;">
                  <img src="Images/svg/undraw_interview02.svg" alt="">
               </div>
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
         <div class="max-width-container">
            <h4 class="color-black text-center mt-2"><strong>Recently Posted Jobs</strong></h4>
            <p class="text-center mb-2 color-light fontsize-14">Lorem, ipsum dolor sit amet consectetur adipisicing</p>
            <div class="border rounded p-4 mb-2">
               <!-- <div class="row" id="application-row-container">
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
               </div> -->

               <div class="row" id="application-row-container">
                  <?php
                  require "includes/db_connection.inc.php";
                  $sql = "SELECT * FROM `job_description`";
                  $result = $conn->query($sql);
                  while ($row = $result->fetch_assoc()) {
                     $eid = $row['employer_id'];
                     $data = get_emp($conn, $eid);
                  ?>
                     <div class="col-lg-4 pb-4" id="div_job0_<?php echo $row["_id"] ?>">
                        <div class="rounded p-4 bg-white shadow-sm-hover jobs bt-cp2-4 border-start border-bottom border-end hover-bg-light position-relative">
                           <div class="d-inline-block overflow-hidden border rounded mb-2 background-thicker-light" style="height: 60px; width: 60px;">
                              <div class="image-container" style="height: 100%; width: 100%;">
                                 <img src="<?php if ($data['company_logo'] != "") {
                                                if (file_exists($data['company_logo'])) {
                                                   echo $data['company_logo'];
                                                } else {
                                                   $dt = $data['company_logo'];
                                                   echo str_replace("../", "", $dt);
                                                }
                                             } else {

                                             }  ?>" alt="#">
                              </div>
                           </div>
                           <span data-feather="bookmark" class="float-end hover-text-primary" style="height: 22px; width: 22px;"></span>
                           <a href="#" class="no-text-decor" id="btn-job0_<?php echo $row["_id"] ?>" onclick="job_submit(this.id)">
                              <h6 class="mb-0 color-black"><?php echo $row["job_title"] ?></h6>
                              <p class="fontsize-13 color-black mb-3"><?php echo $row["employer_name"] ?></p>
                              <p class="fontsize-13 color-black m-0"><?php echo $row["job_address"] ?></p>
                              <p class="fontsize-13 color-black mb-3 font-500"><?php echo "Salary Range: PHP " . $row["salary_range"]; ?></p>
                              <p class="fontsize-13 color-light mb-0"><?php echo $row["job_type"] ?></p>
                              <div class="position-absolute date-posted">
                                 <p class="font-super--small color-light m-0 text-end">Date Posted: <?php echo $row["date_posted"] ?></p>
                              </div>
                           </a>
                        </div>
                     </div>
                  <?php
                  }
                  ?>
               </div>

            </div>
            <!-- <div class="d-flex justify-content-end">
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
            </div> -->
         </div>
      </div>
      <!-- <div id="fourth-container">
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
      </div> -->
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
   <script src="javascript/jQueryRequest.js"></script>
   <script src="javascript/validations.js"></script>
   <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
   <script>
      loadPage();
      feather.replace();
      document.title = "CCIT Alumni Tracing and Job Portal";
      var parent = document.getElementById('index-link').parentElement
      parent.classList.add('active');
   </script>
</body>

</html>