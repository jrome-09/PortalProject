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
                <form action="#" id="employment_profile_experienced_employed_form">
                    <div class="border rounded bg-white mb-2 shadow-sm">
                        <header class="px-4 py-3 fontsize-14 font-500 border-bottom">
                            Employment Profile: Unemployed with Experience
                        </header>
                        <main class="p-4">
                            <label for="employer_name-exp" class="required color-light text-start fontsize-13 mb-2">Name of the Company where you recently worked for:</label>
                            <input type="text" class="form-control mb-2 fontsize-14" id="employer_name-exp" name="employer_name-exp">

                            <label for="recent_position" class="required color-light text-start fontsize-13 mb-2">Recent Position:</label>
                            <input type="text" class="form-control mb-2 fontsize-14" id="recent_position" name="recent_position">
                        </main>
                    </div>
                    <div class="border rounded bg-white mb-3 shadow-sm">
                        <main class="p-4">
                            <label for="reasons" class="required color-light text-start fontsize-13 mb-2">Reason for leaving your recent work:</label>
                            <div class="mb-2">
                                <!-- <input type="checkbox" name="reason01_checkbox" class="btn-check" id="reason01_checkbox" autocomplete="off">
                                <label class="btn min-width-285 btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason01_checkbox">
                                    My salary was low.
                                </label>
                                <br>
                                <input type="checkbox" name="reason02_checkbox" class="btn-check" id="reason02_checkbox" autocomplete="off">
                                <label class=" btn min-width-285 btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason02_checkbox">
                                    I had to take care of family concerns.
                                </label>
                                <br>
                                <input type="checkbox" name="reason03_checkbox" class="btn-check" id="reason03_checkbox" autocomplete="off">
                                <label class=" btn min-width-285 btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason03_checkbox">
                                    I have health problem.
                                </label>
                                <br>
                                <input type="checkbox" name="reason04_checkbox" class="btn-check" id="reason04_checkbox" autocomplete="off">
                                <label class=" btn min-width-285 btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="reason04_checkbox">
                                    My recent work was not related to my specialization
                                </label>
                                <div class="d-flex flex-row">
                                    <label class=" btn bg-light rounded-0 rounded-start border-end-0 color-black font-500 border fontsize-13 text-start" for="otherreason_input">Other:</label>
                                    <input type="text" class="form-control rounded-0 rounded-end fontsize-14 color-black" id="otherreason_input" name="othereason_input">
                                </div> -->
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="reason01_checkbox">
                                    <label class="form-check-label" for="reason01_checkbox">
                                    My salary was low.
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="reason02_checkbox">
                                    <label class="form-check-label" for="reason02_checkbox">
                                    I had to take care of family concerns.
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="reason03_checkbox">
                                    <label class="form-check-label" for="reason03_checkbox">
                                    I have health problem.
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="reason04_checkbox">
                                    <label class="form-check-label" for="reason04_checkbox">
                                    My recent work was not related to my specialization
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
                    <div class="fontsize-13 text-danger" id="error_result"></div>
                    <div class="swal2-validation-message fontsize-13 d-none mb-4 shadow-sm" id="swal2-validation-message" style="display: flex;">
                        <!-- Invalid email address. -->
                    </div>
                    <a href="form02.php" class="btn bg-2 px-5 me-2">Back</a>
                    <button type="button" class="btn bg-2 px-5" onclick="validate_af03_exp_employed()">Next</button>

                    <input type="hidden" name="experienced_unemployed" value="">
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
        document.title = "CCIT Alumni Tracer"
        feather.replace();
        document.getElementById('alumni-link').classList.toggle('active');
    </script>
</body>

</html>