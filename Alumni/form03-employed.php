<?php
require "alumni-head.html";
require "../html/script.html";

?>

<body class="bg-light">
    <?php
    require_once '../includes/nav.php';
    require_once '../includes/loader.php';
    ?>
    <main>
        <div class="max-width-container">
            <div class="max-width-container py-0">
                <div class="p-4 border rounded bg-white mb-2 shadow-sm">
                    <p class="fontsize-13 color-black">Dear Respondent:</p>
                    <p class="fontsize-13 color-black">We are conducting a tracer study of ICT graduates of the University of Northern Philippines. Your response to this survey will help us complete this undertaking. We assure you that all data you will provide shall be treated with utmost respect and confidentiality </p>
                    <p class="fontsize-13 color-black">Thank you very much.</p>
                </div>
                <p class="text-end text-secondary mb-2 mt-4">Part 3 of ?? ...</p>
                <form action="#" id="employment_profile_employed_form">
                    <div class="border rounded bg-white mb-2 overflow-hidden shadow-sm">
                        <header class="px-4 bg-light py-3 fontsize-14 font-500 border-bottom">
                            Employment Profile: Employed
                        </header>
                        <main class="p-4">
                            <label for="employer_name" class="required color-light text-start fontsize-13 mb-1">Name of Company/Employer:</label>
                            <input type="text" class="form-control mb-2 fontsize-14" id="employer_name" name="employer_name">
                            <label for="employer_address" class="required color-light text-start fontsize-13 mb-1">Address of Company/Employer:</label>
                            <input type="text" class="form-control mb-2 fontsize-14" id="employer_address" name="employer_address">
                            <label for="present_position" class="required color-light text-start fontsize-13 mb-1">Your Present Position:</label>
                            <input type="text" class="form-control mb-2 fontsize-14" id="present_position" name="present_position">
                        </main>
                    </div>
                    <div class="border rounded bg-white mb-2 p-4 shadow-sm">
                        <label for="employment_type" class="required color-light text-start fontsize-13 mb-2">Employment type:</label>
                        <div class="income_div mb-2">
                            <!-- <input type="checkbox" name="permanent_checkbox" class="btn-check" id="permanent_checkbox" autocomplete="off" onclick="employment_statusCheckBox()">
                            <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="permanent_checkbox">
                                Permanent
                            </label>
                            <br>
                            <input type="checkbox" name="temporary_checkbox" class="btn-check" id="temporary_checkbox" autocomplete="off" onclick="employment_statusCheckBox()">
                            <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="temporary_checkbox">
                                Temporary
                            </label>
                            <br>
                            <input type="checkbox" name="contractual_checkbox" class="btn-check" id="contractual_checkbox" autocomplete="off" onclick="employment_statusCheckBox()">
                            <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="contractual_checkbox">
                                Contractual
                            </label>
                            <br>
                            <input type="checkbox" name="casual_checkbox" class="btn-check" id="casual_checkbox" autocomplete="off" onclick="employment_statusCheckBox()">
                            <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="casual_checkbox">
                                Casual
                            </label> -->
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('employment_type', this.name)" type="radio" name="employment_type_chk" id="radio1" value="Permanent">
                                <label class="form-check-label" for="radio1">
                                    Permanent
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('employment_type', this.name)" type="radio" name="employment_type_chk" id="radio2" value="Temporary">
                                <label class="form-check-label" for="radio2">
                                    Temporary
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('employment_type', this.name)" type="radio" name="employment_type_chk" id="radio3" value="Contractual">
                                <label class="form-check-label" for="radio3">
                                    Contractual
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('employment_type', this.name)" type="radio" name="employment_type_chk" id="radio4" value="Casual">
                                <label class="form-check-label" for="radio4">
                                    Casual
                                </label>
                            </div>

                            <input type="hidden" id="employment_type" name="employment_type">
                        </div>
                    </div>
                    <div class="p-4 border rounded bg-white mb-2 shadow-sm">
                        <label for="monthly_income" class="required color-light text-start fontsize-13 mb-1">Monthly Salary Range:</label>
                        <div class="income_div mb-2">
                            <!-- <input type="checkbox" name="php1_checkbox" class="btn-check" id="php1_checkbox" autocomplete="off" onclick="salaryCheckBox()">
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
                            </label> -->
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('monthly_income', this.name)" type="radio" name="salary_chk" id="radio5" value="Below Php 10,000.00">
                                <label class="form-check-label" for="radio5">
                                    Below Php 10,000.00
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('monthly_income', this.name)" type="radio" name="salary_chk" id="radio6" value="PHP 10,000.00 - 19,999.99">
                                <label class="form-check-label" for="radio6">
                                    PHP 10,000.00 - 19,999.99
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('monthly_income', this.name)" type="radio" name="salary_chk" id="radio7" value="Php 20,000.00 - 29,999.99">
                                <label class="form-check-label" for="radio7">
                                    Php 20,000.00 - 29,999.99
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('monthly_income', this.name)" type="radio" name="salary_chk" id="radio8" value="PHP 30,000.00 and above">
                                <label class="form-check-label" for="radio8">
                                    PHP 30,000.00 and above
                                </label>
                            </div>
                            <input type="hidden" id="monthly_income" name="monthly_income">
                        </div>
                    </div>
                    <div class="p-4 border rounded bg-white mb-2 shadow-sm">
                        <label for="employment_field" class="required color-light text-start fontsize-13 mb-1">Field of Employment:</label>
                        <div class="income_div mb-2">
                            <!-- <input type="checkbox" name="government_checkbox" class="btn-check" id="government_checkbox" autocomplete="off" onclick="employment_fieldCheckBox()">
                            <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="government_checkbox">
                                Government
                            </label>
                            <br>
                            <input type="checkbox" name="private_checkbox" class="btn-check" id="private_checkbox" autocomplete="off" onclick="employment_fieldCheckBox()">
                            <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="private_checkbox">
                                Private
                            </label> -->
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('employment_field', this.name)" type="radio" name="field_chk" id="radio9" value="Government">
                                <label class="form-check-label" for="radio9">
                                    Government
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('employment_field', this.name)" type="radio" name="field_chk" id="radio10" value="Private">
                                <label class="form-check-label" for="radio10">
                                    Private
                                </label>
                            </div>
                            <input type="hidden" id="employment_field" name="employment_field">
                        </div>
                    </div>
                    <div class="p-4 border rounded bg-white mb-2 shadow-sm">
                        <label for="employment_length" class="required color-light text-start fontsize-13 mb-1">How long have you been employed in your current work?:</label>
                        <div class="income_div mb-2">
                            <!-- <input type="checkbox" name="day0006_checkbox" class="btn-check" id="day0006_checkbox" autocomplete="off" onclick="employment_lengthCheckBox()">
                            <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="day0006_checkbox">
                                0 – 6 months
                            </label>
                            <br>
                            <input type="checkbox" name="day0712_checkbox" class="btn-check" id="day0712_checkbox" autocomplete="off" onclick="employment_lengthCheckBox()">
                            <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="day0712_checkbox">
                                7 – 12 months
                            </label>
                            <br>
                            <input type="checkbox" name="day1318_checkbox" class="btn-check" id="day1318_checkbox" autocomplete="off" onclick="employment_lengthCheckBox()">
                            <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="day1318_checkbox">
                                13 – 18 months
                            </label>
                            <br>
                            <input type="checkbox" name="day1924_checkbox" class="btn-check" id="day1924_checkbox" autocomplete="off" onclick="employment_lengthCheckBox()">
                            <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="day1924_checkbox">
                                19 – 24 months
                            </label>
                            <br>
                            <input type="checkbox" name="day24above_checkbox" class="btn-check" id="day24above_checkbox" autocomplete="off" onclick="employment_lengthCheckBox()">
                            <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="day24above_checkbox">
                                more than 24 months
                            </label> -->
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('employment_length', this.name)" type="radio" name="employment_chk" id="radio11" value="0 – 6 months">
                                <label class="form-check-label" for="radio11">
                                    0 – 6 months
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('employment_length', this.name)" type="radio" name="employment_chk" id="radio12" value="7 – 12 months">
                                <label class="form-check-label" for="radio12">
                                    7 – 12 months
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('employment_length', this.name)" type="radio" name="employment_chk" id="radio13" value="13 – 18 months">
                                <label class="form-check-label" for="radio13">
                                    13 – 18 months
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('employment_length', this.name)" type="radio" name="employment_chk" id="radio14" value="19 – 24 months">
                                <label class="form-check-label" for="radio14">
                                    19 – 24 months
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('employment_length', this.name)" type="radio" name="employment_chk" id="radio15" value="more than 24 months">
                                <label class="form-check-label" for="radio15">
                                    more than 24 months
                                </label>
                            </div>

                            <input type="hidden" id="employment_length" name="employment_length">
                        </div>
                    </div>
                    <div class="p-4 border rounded bg-white mb-3 shadow-sm">
                        <label for="ict_related" class="required color-light text-start fontsize-13 mb-1">Is your present job related to ICT?:</label>
                        <div class="income_div mb-2">
                            <!-- <input type="checkbox" name="ictyes_checkbox" class="btn-check" id="ictyes_checkbox" autocomplete="off" onclick="ict_relatedCheckBox()">
                            <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="ictyes_checkbox">
                                Yes
                            </label>
                            <br>
                            <input type="checkbox" name="ictno_checkbox" class="btn-check" id="ictno_checkbox" autocomplete="off" onclick="ict_relatedCheckBox()">
                            <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="ictno_checkbox">
                                No
                            </label> -->
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('ict_related', this.name)" type="radio" name="ict_chk" id="radio16" value="Yes">
                                <label class="form-check-label" for="radio16">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('ict_related', this.name)" type="radio" name="ict_chk" id="radio17" value="No">
                                <label class="form-check-label" for="radio17">
                                    No
                                </label>
                            </div>
                            <input type="hidden" id="ict_related" name="ict_related">
                        </div>
                    </div>
                    <div class="swal2-validation-message fontsize-13 d-none mb-4 shadow-sm" id="swal2-validation-message" style="display: flex;">
                        <!-- Invalid email address. -->
                    </div>
                    <div class="fontsize-13 text-danger" id="error_result"></div>
                    <a href="form02.php" class="btn bg-2 px-5 me-2">Back</a>
                    <button type="button" class="btn bg-2 px-5" onclick="validate_alumni_form03_employed()">Next</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="max-width-container text-center max-width-500px color-light">
            <div class="image-container hw-70px border bg-white rounded-circle m-auto mb-2">

            </div>
            College of Communication and Information Technology Alumni Tracer
        </div>
    </footer>

    <script src="../javascript/jQueryRequest.js"></script>
    <script src="../javascript/validations.js"></script>
    <script src="../javascript/functions.js"></script>
    <script>
        document.title = "CCIT Alumni Tracer"
        feather.replace();
        document.getElementById('alumni-link').classList.toggle('active');
    </script>
</body>

</html>