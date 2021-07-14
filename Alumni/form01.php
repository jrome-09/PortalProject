<?php
require "alumni-head.html";
require "../html/script.html";
?>

<body class="background-thicker-light">
    <header class=" max-width-container p-2 mx-900px">
        <div class="bg-primary form-alumni header-div p-4 rounded color-white d-flex align-items-center">
            <div class="image-container border hw-50px bg-light rounded-circle me-2">

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
        <div class="max-width-container form-alumni p-2 pt-0">
            <div class="p-4 border rounded bg-white mb-2">
                <p class="fontsize-13 color-black">Dear Respondent:</p>
                <p class="fontsize-13 color-black">We are conducting a tracer study of ICT graduates of the University of Northern Philippines. Your response to this survey will help us complete this undertaking. We assure you that all data you will provide shall be treated with utmost respect and confidentiality </p>
                <p class="fontsize-13 color-black">Thank you very much.</p>
            </div>
            <form action="#" class="">
                <header class="px-4 py-3 fontsize-14 font-500 border rounded-top bg-white border-bottom-0">
                    Part 1: Personal Information
                </header>
                <div class="p-4 border rounded-bottom bg-white mb-2">
                    <label for="full_name" class="required color-light text-start fontsize-13 mb-1">Name: (LastName, FirstName, MiddleName)</label>
                    <input type="text" class="form-control mb-2 fontsize-14" require id="full_name" name="full_name">

                    <label for="contact_number" class="required color-light text-start fontsize-13 mb-1">Phone/Mobile No.: (use the format: 09XX-XXX-XXX)</label>
                    <input type="number" class="form-control mb-2 fontsize-14" maxlength="11" id="contact_number" name="contact_number">

                    <label for="email_address" class="required color-light text-start fontsize-13 mb-1">Email Address:</label>
                    <input type="text" class="form-control mb-2 fontsize-14" id="email_address" name="email_address">

                    <label for="address" class="required color-light text-start fontsize-13 mb-1">Address:</label>
                    <input type="text" class="form-control mb-2 fontsize-14" id="address" name="address">

                    <label for="age" class="required color-light text-start fontsize-13 mb-1">Age:</label>
                    <input type="text" class="form-control mb-2 fontsize-14" id="age" name="age">
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <label for="sex" class="required color-light text-start fontsize-13 mb-1">Sex:</label>
                    <div class="sex_div mb-2">
                        <input type="checkbox" name="male_checkbox" class="btn-check" id="male_checkbox" autocomplete="off" onclick="sexCheckBox()">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 min-width-200" for="male_checkbox">
                            Male
                        </label>
                        <br>
                        <input type="checkbox" name="female_checkbox" class="btn-check" id="female_checkbox" autocomplete="off" onclick="sexCheckBox()">
                        <label class=" btn btn-light color-black font-500 border fontsize-13 min-width-200" for="female_checkbox">
                            Female
                        </label>

                        <input type="hidden" id="sex" name="sex">
                    </div>
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <label for="civil_status" class="required color-light text-start fontsize-13 mb-1">Civil Status:</label>
                    <div class="civil_div">
                        <input type="checkbox" name="single_checkbox" class="btn-check" id="single_checkbox" autocomplete="off" onclick="civilstatusCheckBox()">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 min-width-200" for="single_checkbox">
                            Single
                        </label>
                        <br>
                        <input type="checkbox" name="married_checkbox" class="btn-check" id="married_checkbox" autocomplete="off" onclick="civilstatusCheckBox()">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 min-width-200" for="married_checkbox">
                            Married
                        </label>
                        <br>
                        <input type="checkbox" name="separated_checkbox" class="btn-check" id="separated_checkbox" autocomplete="off" onclick="civilstatusCheckBox()">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 min-width-200" for="separated_checkbox">
                            Separated
                        </label>
                        <br>
                        <input type="checkbox" name="widowed_checkbox" class="btn-check" id="widowed_checkbox" autocomplete="off"" onclick=" civilstatusCheckBox()">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 min-width-200" for="widowed_checkbox">
                            Widowed
                        </label>

                        <input type="hidden" id="civil_status" name="civil_status">
                    </div>
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <label for="residence" class="required color-light text-start fontsize-13 mb-1">Place of Residence:</label>
                    <div class="residence_div mb-2">
                        <input type="checkbox" name="urban_checkbox" class="btn-check" id="urban_checkbox" autocomplete="off" onclick="residenceCheckBox()">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 min-width-200" for="urban_checkbox">
                            Urban
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off" onclick="residenceCheckBox()">
                        <label class=" btn btn-light color-black font-500 border fontsize-13 min-width-200" for="rural_checkbox">
                            Rural
                        </label>

                        <input type="hidden" id="residence" name="residence">
                    </div>
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <label for="monthly_salary" class="required color-light text-start fontsize-13 mb-1">Family Monthly Income:</label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="php1_checkbox" class="btn-check" id="php1_checkbox" autocomplete="off" onclick="salaryCheckBox()">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="php1_checkbox">
                            Below Php 10,000.00
                        </label>
                        <br>
                        <input type="checkbox" name="php2_checkbox" class="btn-check" id="php2_checkbox" autocomplete="off" onclick="salaryCheckBox()">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="php2_checkbox">
                            PHP 10,000.00 - 19,999.99
                        </label>
                        <br>
                        <input type="checkbox" name="php3_checkbox" class="btn-check" id="php3_checkbox" autocomplete="off" onclick="salaryCheckBox()">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="php3_checkbox">
                            Php 20,000.00 - 29,999.99
                        </label>
                        <br>
                        <input type="checkbox" name="php4_checkbox" class="btn-check" id="php4_checkbox" autocomplete="off" onclick="salaryCheckBox()">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="php4_checkbox">
                            PHP 30,000.00 and above
                        </label>
                        <input type="hidden" id="monthly_salary" name="monthly_salary">
                    </div>
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <!-- <label class="required fontsize-13 color-light text-start">
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
                    </div> -->

                    <label for="graduation_year" class="required fontsize-13 color-light text-start">
                        Graduation Year:
                    </label>
                    <div class="position-relative dropdown-container">
                        <div class="form-control mb-2" onclick="showYearList()">
                            <span class="color-black fontsize-13" id="control-selected-year">Select Year</span>
                            <span data-feather="chevron-down" class="color-black"></span>
                        </div>
                        <input type="hidden" id="graduation_year" name="graduation_year">
                        <div class="option-container border rounded shadow-sm bg-white p-2" id="optionsYear">
                            <ul class="p-0 color-black fontsize-13" id="list__ul__Year">
                                <li class="p-2 rounded" id="2030" onclick="YearSelect(this.id)">2030</li>
                            </ul>
                        </div>
                    </div>

                    <label for="degree_earned" class="required fontsize-13 color-light text-start">
                        Degree Earned:
                    </label>
                    <div class="position-relative dropdown-container">
                        <div class="form-control mb-2" onclick="showDegreeList()">
                            <span class="color-black fontsize-13" id="control-selected-degree">Select Degree</span>
                            <span data-feather="chevron-down" class="color-black"></span>
                        </div>
                        <input type="hidden" id="degree_earned" name="course">
                        <div class="option-container border rounded shadow-sm bg-white p-2" id="optionsDegree">
                            <ul class="p-0 color-black fontsize-13" id="list__ul__Degree">
                                <li class="p-2 rounded" id="Deg_bscomputerscience" onclick="DegreeSelect(this.id)">Bachelor of Science in Computer Science</li>
                                <li class="p-2 rounded" id="Deg_bsinformationtechnology" onclick="DegreeSelect(this.id)">Bachelor of Science in Information Technology</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="p-4 border rounded bg-white mb-2">
                    <label for="organization_affiliation" class="required color-light text-start fontsize-13 mb-1">Organizational Affiliation in College: </label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="urban_checkbox" class="btn-check" id="studentleader_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="studentleader_checkbox">
                            Student Leader
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="studentjournalist_checkbox" autocomplete="off">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="studentjournalist_checkbox">
                            Student Journalist
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="organizationmember_checkbox" autocomplete="off">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="organizationmember_checkbox">
                            Organization Member
                        </label>
                        <br>
                        <div class="d-flex flex-row">
                            <label class=" btn bg-light rounded-0 rounded-start border-end-0 color-black font-500 border fontsize-13 text-start" for="otheraffiliation_input">Other:</label>
                            <input type="text" class="form-control rounded-0 rounded-end fontsize-14 color-black" id="otheraffiliation_input" name="otheraffiliation_input">
                        </div>
                        <input type="hidden" id="organization_affiliation" name="organization_affiliation">
                    </div>
                </div>

                <div class="p-4 border rounded bg-white mb-2">
                    <label for="academic_awards" class="required color-light text-start fontsize-13 mb-1">Academic Award(s) Received:</label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="none_checkbox" class="btn-check" id="none_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="none_checkbox">
                            None
                        </label>
                        <br>
                        <input type="checkbox" name="magnacumlaude_checkbox" class="btn-check" id="magnacumlaude_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="magnacumlaude_checkbox">
                        Magna Cum Laude
                        </label>
                        <br>
                        <input type="checkbox" name="cumlaude_checkbox" class="btn-check" id="cumlaude_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="cumlaude_checkbox">
                        Cum Laude
                        </label>
                        <br>
                        <input type="checkbox" name="journalism_checkbox" class="btn-check" id="journalism_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="journalism_checkbox">
                        Journalism Award
                        </label>
                        <br>
                        <input type="checkbox" name="leadership_checkbox" class="btn-check" id="leadership_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="leadership_checkbox">
                        Leadership Award
                        </label>
                        <br>
                        <input type="checkbox" name="sportsaward_checkbox" class="btn-check" id="sportsaward_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="sportsaward_checkbox">
                            Sports Award
                        </label>
                        <br>

                        <div class="d-flex flex-row">
                            <label class=" btn bg-light rounded-0 rounded-start border-end-0 color-black font-500 border fontsize-13 text-start" for="otherawards_input">Other:</label>
                            <input type="text" class="form-control rounded-0 rounded-end fontsize-14 color-black" id="otherawards_input" name="otherawards_input">
                        </div>
                        <input type="hidden" id="academic_awards" name="academic_awards">
                    </div>
                </div>

                <div class="p-4 border rounded bg-white mb-2">
                    <label for="ict_certification" class="required color-light text-start fontsize-13 mb-1">ICT Certification:</label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="cssnc2_checkbox" class="btn-check" id="cssnc2_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="cssnc2_checkbox">
                            TESDA Computer System Servicing NC II
                        </label>
                        <br>
                        <input type="checkbox" name="anc2_checkbox" class="btn-check" id="anc2_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="anc2_checkbox">
                        TESDA Animation NC ll
                        </label>
                        <br>
                        <input type="checkbox" name="t2danc2_checkbox" class="btn-check" id="t2danc2_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="t2danc2_checkbox">
                        TESDA 2D Animation NC lll
                        </label>
                        <br>
                        <input type="checkbox" name="t3danc2_checkbox" class="btn-check" id="t3danc2_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="t3danc2_checkbox">
                        TESDA 3D Animation NC lll
                        </label>
                        <br>
                        <input type="checkbox" name="vgdnc3_checkbox" class="btn-check" id="vgdnc3_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="vgdnc3_checkbox">
                        TESDA Visual Graphic Design NC lll
                        </label>
                        <br>
                        <input type="checkbox" name="wdnc2_checkbox" class="btn-check" id="wdnc2_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-285" for="wdnc2_checkbox">
                            TESDA Web Development NC lll
                        </label>
                        <br>
                        <div class="d-flex flex-row">
                            <label class=" btn bg-light rounded-0 rounded-start border-end-0 color-black font-500 border fontsize-13 text-start" for="othercertificates_input">Other:</label>
                            <input type="text" class="form-control rounded-0 rounded-end fontsize-14 color-black" id="othercertificates_input" name="othercertificates_input">
                        </div>
                        <input type="hidden" id="ict_certification" name="ict_certification">
                    </div>
                </div>
                <div class="fontsize-13 text-danger" id="error_result"></div>
                <div class="row">
                    <div class="col-md-8">
                        <button type="button" class="btn btn-primary fontsize-13 font-500 px-5 mt-2" onclick="validate_alumni_form01()">Next</button>
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
    <script src="../javascript/validations.js"></script>
    <script>
        feather.replace();
        GetYearList();
    </script>

</body>

</html>