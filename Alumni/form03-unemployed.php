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
                <div class="border rounded bg-white mb-3 shadow-sm">
                    <header class="px-4 py-3 fontsize-14 font-500 border-bottom">
                        Employment Profile: Unemployed
                    </header>
                    <main class="p-4">
                        <form action="#" id="employment_profile_unemployed_form">
                            <label for="reasons" class="required color-light text-start fontsize-13 mb-2">Reasons for being Unemployed:</label>
                            <div class="income_div mb-2">
                                <input type="checkbox" name="reason01_checkbox" class="btn-check" id="reason01_checkbox" autocomplete="off"">
                                <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason01_checkbox">
                                I cannot find a job opportunity related to my field.
                                </label>
                                <br>
                                <input type="checkbox" name="reason02_checkbox" class="btn-check" id="reason02_checkbox" autocomplete="off"">
                                <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason02_checkbox">
                                There are IT-related job offerings but the salary is too low.
                                </label>
                                <br>
                                <input type="checkbox" name="reason03_checkbox" class="btn-check" id="reason03_checkbox" autocomplete="off"">
                                <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason03_checkbox">
                                I wasn’t hired because of lack of work experience.
                                </label>
                                <br>
                                <input type="checkbox" name="reason04_checkbox" class="btn-check" id="reason04_checkbox" autocomplete="off"">
                                <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason04_checkbox">
                                I had to take care of family concerns.
                                </label>
                                <br>
                                <input type="checkbox" name="reason05_checkbox" class="btn-check" id="reason05_checkbox" autocomplete="off"">
                                <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason05_checkbox">
                                I have health problem.
                                </label>
                                <br>
                                <div class="d-flex flex-row">
                                    <label class=" btn bg-light rounded-0 rounded-start border-end-0 color-black font-500 border fontsize-13 text-start" for="otherreason_input">Other:</label>
                                    <input type="text" class="form-control rounded-0 rounded-end fontsize-14 color-black" id="otherreason_input" name="othereason_input">
                                </div>

                                <input type="hidden" id="reasons" name="reasons">
                                <input type="hidden" name="unemployed" value="">
                            </div>
                        </form>
                    </main>
                </div>
                <div class="fontsize-13 text-danger" id="error_result"></div>
                <div class="swal2-validation-message fontsize-13 d-none mb-4 shadow-sm" id="swal2-validation-message" style="display: flex;">
                    <!-- Invalid email address. -->
                </div>

                <button class="btn bg-2 px-5 me-2">Back</button>
                <button type="button" class="btn bg-2 px-5" onclick="validate_alumni_form03_unemployed()">Next</button>

                <input type="hidden" name="unemployed" value="">
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
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/jQueryRequest.js"></script>
    <script src="../javascript/validations.js"></script>
    <script>
        feather.replace();
        document.title = 'CCIT Tracer'
    </script>
</body>

</html>