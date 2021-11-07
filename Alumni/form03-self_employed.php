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
                <form action="#" id="employment_profile_self_employed_form">
                    <div class="border rounded bg-white mb-2 overflow-hidden shadow-sm">
                        <header class="px-4 py-3 fontsize-14 font-500 border-bottom bg-light">
                            Employment Profile: Self-Employed
                        </header>
                        <main class="p-4">
                            <label for="reasons" class="required color-light text-start fontsize-13 mb-2">Reasons for being Self-Employed:</label>
                            <div class="mb-2">
                                <!-- <input type="checkbox" name="reason01_checkbox" class="btn-check" id="reason01_checkbox" autocomplete="off"">
                                <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason01_checkbox">
                                I am managing a family-owned company.
                                </label>
                                <br>
                                <input type="checkbox" name="reason02_checkbox" class="btn-check" id="reason02_checkbox" autocomplete="off"">
                                <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason02_checkbox">
                                I wanted to open my own business.
                                </label>
                                <br>
                                <input type="checkbox" name="reason03_checkbox" class="btn-check" id="reason03_checkbox" autocomplete="off"">
                                <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason03_checkbox">
                                I prefer working freelance than in a company.
                                </label>
                                <br>
                                <input type="checkbox" name="reason04_checkbox" class="btn-check" id="reason04_checkbox" autocomplete="off"">
                                <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason04_checkbox">
                                I cannot find a job opportunity related to my field.
                                </label>
                                <br>
                                <input type="checkbox" name="reason05_checkbox" class="btn-check" id="reason05_checkbox" autocomplete="off"">
                                <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason05_checkbox">
                                There are job offerings relevant to my course but the salary is too low.
                                </label>
                                <br>
                                <input type="checkbox" name="reason06_checkbox" class="btn-check" id="reason06_checkbox" autocomplete="off"">
                                <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason06_checkbox">
                                I applied for jobs relevant to my field but I lacked experience.
                                </label> -->
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="reason01_checkbox">
                                    <label class="form-check-label" for="reason01_checkbox">
                                        I am managing a family-owned company.
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="reason02_checkbox">
                                    <label class="form-check-label" for="reason02_checkbox">
                                        I wanted to open my own business.
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="reason03_checkbox">
                                    <label class="form-check-label" for="reason03_checkbox">
                                        I prefer working freelance than in a company.
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="reason04_checkbox">
                                    <label class="form-check-label" for="reason04_checkbox">
                                        I cannot find a job opportunity related to my field.
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="reason05_checkbox">
                                    <label class="form-check-label" for="reason05_checkbox">
                                        There are job offerings relevant to my course but the salary is too low.
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="reason06_checkbox">
                                    <label class="form-check-label" for="reason06_checkbox">
                                        I applied for jobs relevant to my field but I lacked experience.
                                    </label>
                                </div>
                                <br>
                                <div class="d-flex flex-row">
                                    <label class=" btn bg-light rounded-0 rounded-start border-end-0 color-black font-500 border fontsize-13 text-start" for="otherreason_input">Other:</label>
                                    <input type="text" class="form-control rounded-0 rounded-end fontsize-14 color-black" id="otherreason_input" name="othereason_input">
                                </div>

                                <input type="hidden" id="reasons" name="reasons">
                            </div>

                        </main>
                    </div>
                    <div class="border p-4 rounded bg-white mb-2 shadow-sm">
                        <label for="business_type" class="required color-light text-start fontsize-13 mb-0">Work / Business Type:</label>
                        <p class="font-super--small color-light mb-1">(e.g App Development/Photography/Hardware Software Services)</p>
                        <input type="text" class="form-control mb-2 fontsize-14" id="business_type" name="business_type">

                        <label for="business_name" class="required color-light text-start fontsize-13 mb-1">Name of Your Company / Work</label>
                        <input type="text" class="form-control mb-2 fontsize-14" id="business_name" name="business_name">

                        <label for="business_description" class="required color-light text-start fontsize-13 mb-1">Description of your work</label>
                        <input type="text" class="form-control mb-2 fontsize-14" id="business_description" name="business_description">
                    </div>
                    <div class="p-4 border rounded bg-white mb-3 shadow-sm">
                        <label for="monthly_income" class="required color-light text-start fontsize-13 mb-1">Monthly Income:</label>
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
                                <input class="form-check-input" onclick="radio_check('monthly_income', this.name)" type="radio" name="salary_chk" id="radio9" value="Below Php 10,000.00">
                                <label class="form-check-label" for="radio9">
                                    Below Php 10,000.00
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('monthly_income', this.name)" type="radio" name="salary_chk" id="radio10" value="PHP 10,000.00 - 19,999.99">
                                <label class="form-check-label" for="radio10">
                                    PHP 10,000.00 - 19,999.99
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('monthly_income', this.name)" type="radio" name="salary_chk" id="radio11" value="Php 20,000.00 - 29,999.99">
                                <label class="form-check-label" for="radio11">
                                    Php 20,000.00 - 29,999.99
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" onclick="radio_check('monthly_income', this.name)" type="radio" name="salary_chk" id="radio12" value="PHP 30,000.00 and above">
                                <label class="form-check-label" for="radio12">
                                    PHP 30,000.00 and above
                                </label>
                            </div>
                            <input type="hidden" id="monthly_income" name="monthly_income">
                        </div>
                    </div>
                    <div class="fontsize-13 text-danger" id="error_result"></div>
                    <div class="swal2-validation-message fontsize-13 d-none mb-4 shadow-sm" id="swal2-validation-message" style="display: flex;">
                        <!-- Invalid email address. -->
                    </div>

                    <a href="form02.php" class="btn bg-2 px-5 me-2">Back</a>
                    <button type="button" class="btn bg-2 px-5" onclick="validate_alumni_form03_self_employed()">Next</button>

                    <input type="hidden" name="self_employed" value="">
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
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/validations.js"></script>
    <script>
        feather.replace();
        document.title = 'CCIT Alumni Tracer'
        document.getElementById('alumni-link').classList.toggle('active');
    </script>
</body>

</html>