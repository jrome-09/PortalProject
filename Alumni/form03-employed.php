<?php
require "alumni-head.html";
require "../html/script.html";
?>

<body class="background-thicker-light">
    <main>
        <div class="max-width-container mx-900px p-2">
            <div class="p-4 border rounded bg-white mb-2">
                <p class="fontsize-13 color-black">Dear Respondent:</p>
                <p class="fontsize-13 color-black">We are conducting a tracer study of ICT graduates of the University of Northern Philippines. Your response to this survey will help us complete this undertaking. We assure you that all data you will provide shall be treated with utmost respect and confidentiality </p>
                <p class="fontsize-13 color-black">Thank you very much.</p>
            </div>
            <form action="#">
                <div class="border rounded bg-white mb-2 overflow-hidden">
                    <header class="px-4 bg-light py-3 fontsize-14 font-500 border-bottom">
                        Employment Profile: Employed
                    </header>
                    <main class="p-4">
                        <label for="employer_name" class="required color-light text-start fontsize-13 mb-1">Name of Company/Employer:</label>
                        <input type="text" class="form-control mb-2 fontsize-14" id="employer_name">
                        <label for="employer_address" class="required color-light text-start fontsize-13 mb-1">Address of Company/Employer:</label>
                        <input type="text" class="form-control mb-2 fontsize-14" id="employer_address">
                        <label for="present_position" class="required color-light text-start fontsize-13 mb-1">Present Position:</label>
                        <input type="text" class="form-control mb-2 fontsize-14" id="present_position">
                    </main>
                </div>
                <div class="border rounded bg-white mb-2 p-4">
                    <label for="first_name" class="required color-light text-start fontsize-14 mb-1">Employment Status:</label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="permanent_checkbox" class="btn-check" id="permanent_checkbox" autocomplete="off">
                        <label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="permanent_checkbox">
                            Permanent
                        </label>
                        <br>
                        <input type="checkbox" name="temporary_checkbox" class="btn-check" id="temporary_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="temporary_checkbox">
                        Temporary
                        </label>
                        <br>
                        <input type="checkbox" name="contractual_checkbox" class="btn-check" id="contractual_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="contractual_checkbox">
                        Contractual
                        </label>
                        <br>
                        <input type="checkbox" name="casual_checkbox" class="btn-check" id="casual_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="casual_checkbox">
                        Casual
                        </label>

                        <input type="hidden" id="experienceType" name="expType">
                    </div>
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <label for="address" class="required color-light text-start fontsize-13 mb-1">Family Monthly Income:</label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        Below Php 10,000.00
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        PHP 10,000.00 - 19,999.99
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        Php 20,000.00 - 29,999.99
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        PHP 30,000.00 and above
                        </label>
                        <input type="hidden" id="experienceType" name="expType">
                    </div>
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <label for="address" class="required color-light text-start fontsize-13 mb-1">Field of Employment:</label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        Government
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        Private
                        </label>
                        <input type="hidden" id="experienceType" name="expType">
                    </div>
                </div>
                <div class="p-4 border rounded bg-white mb-2">
                    <label for="address" class="required color-light text-start fontsize-13 mb-1">How long have you been employed in your current work?:</label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        0 – 6 months
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        7 – 12 months
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        13 – 18 months
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        19 – 24 months
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        more than 24 months
                        </label>
                        <input type="hidden" id="experienceType" name="expType">
                    </div>
                </div>
                <div class="p-4 border rounded bg-white mb-3">
                    <label for="address" class="required color-light text-start fontsize-13 mb-1">Is your present job related to ICT?:</label>
                    <div class="income_div mb-2">
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        Yes
                        </label>
                        <br>
                        <input type="checkbox" name="rural_checkbox" class="btn-check" id="rural_checkbox" autocomplete="off"">
                        <label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="rural_checkbox">
                        No
                        </label>
                        <input type="hidden" id="experienceType" name="expType">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <button class="btn btn-primary fontsize-13 font-500 px-5 me-2">Back</button>
                        <button class="btn btn-primary fontsize-13 font-500 px-5">Next</button>
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
            </form>
        </div>

    </main>
    <footer>
        <div class="max-width-container text-center max-width-500px color-light">
            College of Communication and Information Technology Alumni Tracer
        </div>
    </footer>
</body>

</html>