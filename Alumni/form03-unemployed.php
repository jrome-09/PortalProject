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
            <div class="border rounded bg-white mb-2">
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
            <div class="row">
                <div class="col-md-8 mt-2">
                    <button class="btn btn-primary fontsize-13 font-500 px-5 me-2">Back</button>
                    <button type="button" class="btn btn-primary fontsize-13 font-500 px-5" onclick="validate_alumni_form03_unemployed()">Next</button>
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
            <input type="hidden" name="unemployed" value="">
        </div>

    </main>
    <footer>
        <div class="max-width-container text-center max-width-500px color-light">
            College of Communication and Information Technology Alumni Tracer
        </div>
    </footer>
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/jQueryRequest.js"></script>
    <script src="../javascript/validations.js"></script>
</body>

</html>