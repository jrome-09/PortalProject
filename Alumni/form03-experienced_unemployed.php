<?php
require "alumni-head.html";
require "../html/script.html";
?>

<body>
    <main>
        <div class="max-width-container mx-900px p-2">
            <div class="p-4 border rounded bg-white mb-2">
                <p class="fontsize-13 color-black">Dear Respondent:</p>
                <p class="fontsize-13 color-black">We are conducting a tracer study of ICT graduates of the University of Northern Philippines. Your response to this survey will help us complete this undertaking. We assure you that all data you will provide shall be treated with utmost respect and confidentiality </p>
                <p class="fontsize-13 color-black">Thank you very much.</p>
            </div>
            <form action="#" id="employment_profile_experienced_employed_form">
                <div class="border rounded bg-white mb-2">
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
                <div class="border rounded bg-white mb-2">
                    <main class="p-4">
                        <label for="reasons" class="required color-light text-start fontsize-13 mb-2">Reason for leaving your recent work:</label>
                        <div class="mb-2">
                            <input type="checkbox" name="reason01_checkbox" class="btn-check" id="reason01_checkbox" autocomplete="off">
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
                            </div>
                            <input type="hidden" id="reasons" name="reasons">
                        </div>
                    </main>
                </div>
                <div class="fontsize-13 text-danger" id="error_result"></div>
                <div class="row">
                    <div class="col-md-8 mt-2">
                        <button class="btn btn-primary fontsize-13 font-500 px-5 me-2">Back</button>
                        <button type="button" class="btn btn-primary fontsize-13 font-500 px-5" onclick="validate_af03_exp_employed()">Next</button>
                    </div>
                    <div class="col-md-4 py-3 d-flex align-content-center">
                        <div class="progress w-100">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="fontsize-13 w-100 px-2" style="max-width: 100px; min-width: 100px;">
                            Page 2 of ??
                        </div>

                    </div>
                </div>
                <input type="hidden" name="experienced_unemployed" value="">
            </form>
        </div>
    </main>
    <footer>
        <div class="max-width-container text-center max-width-500px color-light">
            College of Communication and Information Technology Alumni Tracer
        </div>
    </footer>

    <script src="../javascript/jQueryRequest.js"></script>
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/validations.js"></script>
</body>

</html>