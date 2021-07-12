<?php
require "alumni-head.html";
require "../html/script.html";
?>

<body class="background-thicker-light">
    <header class="bg-primary width-100 position-fixed top-0 shadow-sm">
        <div class="max-width-container form-alumni header-div py-1 px-2 color-white d-flex align-items-center">
            <div class="image-container border hw-50px bg-light rounded-pill me-2">

            </div>
            <div class="me-auto" id="form-header-name">
                <h5 class="font-600 m-0">College of Communication and Information Technology</h5>
                <p class="fontsize-13 m-0">University of Northern Philippines</p>
            </div>
            <div class="text-end mt-4" id="form-return-btn" style="min-width: 64.45px;">
                <span data-feather="arrow-left" class="color-white mt-1"></span>
                <a href="#" class="fontsize-13 color-white">Return</a>
            </div>
        </div>
    </header>
    <main class="background-thicker-light form-main">
        <div class="max-width-container form-alumni p-2">
            <div class="p-4 border rounded bg-white mb-2">
                <p class="fontsize-13 color-black">Dear Respondent:</p>
                <p class="fontsize-13 color-black">We are conducting a tracer study of ICT graduates of the University of Northern Philippines. Your response to this survey will help us complete this undertaking. We assure you that all data you will provide shall be treated with utmost respect and confidentiality </p>
                <p class="fontsize-13 color-black">Thank you very much.</p>
            </div>
            <form action="#" class="">
                <div class="p-4 border rounded bg-white mb-2">
                    <label for="first_name" class="required color-light text-start fontsize-13 mb-1">Name: (LastName, FirstName, MiddleName)</label>
                    <input type="text" class="form-control mb-2 fontsize-14" id="first_name">

                    <label for="contact_number" class="required color-light text-start fontsize-13 mb-1">Phone/Mobile No.: (use the format: 09XX-XXX-XXX)</label>
                    <input type="text" class="form-control mb-2 fontsize-14" id="contact_number">

                    <label for="email_address" class="required color-light text-start fontsize-13 mb-1">Email Address:</label>
                    <input type="text" class="form-control mb-2 fontsize-14" id="email_address">

                    <label for="address" class="required color-light text-start fontsize-13 mb-1">Address:</label>
                    <input type="text" class="form-control mb-2 fontsize-14" id="address">

                    <label for="age" class="required color-light text-start fontsize-13 mb-1">Age:</label>
                    <input type="text" class="form-control mb-2 fontsize-14" id="age">
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <label for="address" class="required color-light text-start fontsize-13 mb-1">Sex:</label>
                    <div class="sex_div mb-2">
                        <input type="checkbox" name="male_checkbox" class="btn-check" id="male_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 min-width-200" for="male_checkbox">
                            Male
                        </label>
                        <br>
                        <input type="checkbox" name="female_checkbox" class="btn-check" id="female_checkbox" autocomplete="off"">
                    <label class=" btn btn-light color-black font-500 border fontsize-13 min-width-200" for="female_checkbox">
                        Female
                        </label>

                        <input type="hidden" id="experienceType" name="expType">
                    </div>
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <label for="address" class="required color-light text-start fontsize-13 mb-1">Civil Status:</label>
                    <div class="civil_div">
                        <input type="checkbox" name="single_checkbox" class="btn-check" id="single_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 min-width-200" for="single_checkbox">
                            Single
                        </label>
                        <br>
                        <input type="checkbox" name="married_checkbox" class="btn-check" id="married_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 min-width-200" for="married_checkbox">
                        Married
                        </label>
                        <br>
                        <input type="checkbox" name="separated_checkbox" class="btn-check" id="separated_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 min-width-200" for="separated_checkbox">
                            Separated
                        </label>
                        <br>
                        <input type="checkbox" name="widowed_checkbox" class="btn-check" id="widowed_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 min-width-200" for="widowed_checkbox">
                        Widowed
                        </label>

                        <input type="hidden" id="experienceType" name="expType">
                    </div>
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <label for="address" class="required color-light text-start fontsize-13 mb-1">Place of Residence:</label>
                    <div class="residence_div mb-2">
                        <input type="checkbox" name="urban_checkbox" class="btn-check" id="urban_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 min-width-200" for="urban_checkbox">
                            Urban
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light color-black font-500 border fontsize-13 min-width-200" for="rural_checkbox">
                        Rural
                        </label>

                        <input type="hidden" id="experienceType" name="expType">
                    </div>
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <label for="address" class="required color-light text-start fontsize-13 mb-1">Family Monthly Income:</label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="urban_checkbox" class="btn-check" id="urban_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="urban_checkbox">
                            Below Php 10,000.00
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        Below Php 10,000.00
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        Php 20,000.00 – Php 29,999.99
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        Php 20,000.00 – Php 29,999.99
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        Php 20,000.00 – Php 29,999.99
                        </label>
                        <input type="hidden" id="experienceType" name="expType">
                    </div>
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <label class="required fontsize-13 color-light text-start">
                        Course:
                    </label>
                    <div class="position-relative dropdown-container">
                        <div class="form-control mb-2" onclick="showCourseList()">
                            <span class="color-black fontsize-13" id="control-selected-course">Course</span>
                            <span data-feather="chevron-down" class="color-black"></span>
                        </div>
                        <input type="hidden" id="hiddenCourse" name="course">
                        <div class="option-container border rounded shadow-sm bg-white p-2" id="optionsCourse">
                            <ul class="p-0 color-black fontsize-13" id="list__ul__Course">
                                <li class="p-2 rounded" id="bscomputerscience" onclick="CourseSelect(this.id)">Bachelor of Science in Computer Science</li>
                                <li class="p-2 rounded" id="bsinformationtechnology" onclick="CourseSelect(this.id)">Bachelor of Science in Information Technology</li>
                            </ul>
                        </div>
                    </div>

                    <label for="graduation-year" class="required fontsize-13 color-light text-start">
                        Graduation Year:
                    </label>
                    <div class="position-relative dropdown-container">
                        <div class="form-control mb-2" onclick="showYearList()">
                            <span class="color-black fontsize-13" id="control-selected-year">Select Year</span>
                            <span data-feather="chevron-down" class="color-black"></span>
                        </div>
                        <input type="hidden" id="hiddenYear" name="graduation_year">
                        <div class="option-container border rounded shadow-sm bg-white p-2" id="optionsYear">
                            <ul class="p-0 color-black fontsize-13" id="list__ul__Year">
                                <li class="p-2 rounded" id="2030" onclick="YearSelect(this.id)">2030</li>
                            </ul>
                        </div>
                    </div>

                    <label class="required fontsize-13 color-light text-start">
                        Degree Earned:
                    </label>
                    <div class="position-relative dropdown-container">
                        <div class="form-control mb-2" onclick="showDegreeList()">
                            <span class="color-black fontsize-13" id="control-selected-degree">Course</span>
                            <span data-feather="chevron-down" class="color-black"></span>
                        </div>
                        <input type="hidden" id="hiddenDegree" name="course">
                        <div class="option-container border rounded shadow-sm bg-white p-2" id="optionsDegree">
                            <ul class="p-0 color-black fontsize-13" id="list__ul__Degree">
                                <li class="p-2 rounded" id="Deg_bscomputerscience" onclick="DegreeSelect(this.id)">Bachelor of Science in Computer Science</li>
                                <li class="p-2 rounded" id="Deg_bsinformationtechnology" onclick="DegreeSelect(this.id)">Bachelor of Science in Information Technology</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="p-4 border rounded bg-white mb-2">
                    <label for="address" class="required color-light text-start fontsize-13 mb-1">Organizational Affiliation in College: </label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="urban_checkbox" class="btn-check" id="studentleader_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="studentleader_checkbox">
                            Student Leader
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="studentjournalist_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="studentjournalist_checkbox">
                        Student Journalist
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="organizationmember_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="organizationmember_checkbox">
                        Organization Member
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="otheraffiliation_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="otheraffiliation_checkbox">
                        Other
                        </label>

                        <input type="hidden" id="experienceType" name="expType">
                    </div>
                </div>

                <div class="p-4 border rounded bg-white mb-2">
                    <label for="address" class="required color-light text-start fontsize-13 mb-1">Academic Award(s) Received:</label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="urban_checkbox" class="btn-check" id="none_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="none_checkbox">
                            None
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="magnacumlaude_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="magnacumlaude_checkbox">
                        Magna Cum Laude
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="cumlaude_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="cumlaude_checkbox">
                        Cum Laude
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="journalism_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="journalism_checkbox">
                        Journalism Award
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="leadership_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="leadership_checkbox">
                        Leadership Award
                        </label>
                        <br>
                        <input type="checkbox" name="urban_checkbox" class="btn-check" id="sportsaward_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="sportsaward_checkbox">
                            Sports Award
                        </label>
                        <br>
                        <input type="checkbox" name="urban_checkbox" class="btn-check" id="otherawards_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="otherawards_checkbox">
                            Other Academic Award
                        </label>
                        <input type="hidden" id="experienceType" name="expType">
                    </div>
                </div>

                <div class="p-4 border rounded bg-white mb-2">
                    <label for="address" class="required color-light text-start fontsize-13 mb-1">ICT Certification:</label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="urban_checkbox" class="btn-check" id="cssnc2_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="cssnc2_checkbox">
                            TESDA Computer System Servicing NC II
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="anc2_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="anc2_checkbox">
                        TESDA Animation NC ll
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="2danc2_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="2danc2_checkbox">
                        TESDA 2D Animation NC lll
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="3danc2_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="3danc2_checkbox">
                        TESDA 3D Animation NC lll
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="vgdnc3_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="vgdnc3_checkbox">
                        TESDA Visual Graphic Design NC lll
                        </label>
                        <br>
                        <input type="checkbox" name="urban_checkbox" class="btn-check" id="wdnc2_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="wdnc2_checkbox">
                            TESDA Web Development NC lll
                        </label>
                        <br>
                        <input type="checkbox" name="urban_checkbox" class="btn-check" id="othercertification_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="othercertification_checkbox">
                            Other
                        </label>
                        <input type="hidden" id="experienceType" name="expType">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <button class="btn btn-primary fontsize-13 font-500 px-5 mt-2">Next</button>
                    </div>
                    <div class="col-md-4 py-3 d-flex align-content-center">

                        <div class="progress w-100">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="fontsize-13 w-100 px-2" style="max-width: 90px; min-width: 90px;">
                            Page 1 of ??
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </main>
    <footer>
        <div class="max-width-container text-center max-width-500px color-light">
            College of Communication and Information Technology Alumni Tracer
        </div>
    </footer>
    <script src="../javascript/functions.js"></script>
    <script>
        feather.replace();
        GetYearList();
    </script>

</body>

</html>