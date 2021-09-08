<?php
require "style-link.html";
?>

<body>
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <?php
    require "../includes/nav.php";
    require "../html/script.html";
    ?>
    <main class="bg-light">
        <div class="max-width-container">
            <div class="mxw-900px m-auto">
                <div class="border rounded bg-white p-4 mb-2 fontsize-14 font-700">
                    Fill in the job Details
                </div>

                <form action="#" id="job_form">
                    <input type="hidden" name="job_submit">
                    <div class="border rounded bg-white p-4 mb-2">
                        <label class="fontsize-14 font-700 color-black d-block mb-2"><span data-feather="briefcase"></span> About the Job</label>
                        <label for="job_title" class="required color-black text-start fontsize-13 mb-1">What is the job Title?</label>
                        <input type="text" class="form-control mb-2 fontsize-14" require id="job_title" autocomplete="off" name="job_title">
                        <label for="hiddenJobType" class="required color-black text-start fontsize-13 mb-1">Job Type:</label>
                        <div class="dropdown-container position-relative">
                            <div class="form-control mb-2" onclick="showjobTypeList()">
                                <span class="color-black fontsize-13" id="job-type"></span>
                                <span data-feather="chevron-down" class="color-black"></span>
                            </div>
                            <input type="hidden" id="hiddenJobType" name="job_type">
                            <div class="option-container border rounded shadow-sm bg-white p-2" id="optionsJobType">
                                <ul class="p-0 color-black fontsize-13" id="job_type_list">
                                    <li class="p-2 rounded" id="Full-Time" onclick="jobType_select(this.id)">Full-Time</li>
                                    <li class="p-2 rounded" id="Part-Time" onclick="jobType_select(this.id)">Part-Time</li>
                                    <li class="p-2 rounded" id="Contractual" onclick="jobType_select(this.id)">Contractual</li>
                                    <li class="p-2 rounded" id="Temporary" onclick="jobType_select(this.id)">Temporary</li>
                                    <li class="p-2 rounded" id="Internship" onclick="jobType_select(this.id)">Internship</li>
                                </ul>
                            </div>
                        </div>


                        <label for="hiddenPosition" class="required color-black text-start fontsize-13 mb-1">What is the position Level?</label>
                        <div class="dropdown-container position-relative">
                            <div class="form-control mb-2" onclick="showPositionList()">
                                <span class="color-black fontsize-13" id="level-input"></span>
                                <span data-feather="chevron-down" class="color-black"></span>
                            </div>
                            <input type="hidden" id="hiddenPosition" name="position_level">
                            <div class="option-container border rounded shadow-sm bg-white p-2" id="optionsPosition">
                                <ul class="p-0 color-black fontsize-13" id="list__ul__Position">
                                    <li class="p-2 rounded" id="CEO/SVP/AVP/VP/Director" onclick="position_select(this.id)">CEO / SVP / AVP / VP / Director</li>
                                </ul>
                            </div>
                        </div>
                        <label for="job_location" class="required color-black text-start fontsize-13 mb-1">Location:</label>
                        <input type="text" class="form-control mb-2 fontsize-14" require id="job_location" name="job_location">

                        <label for="hiddenSpecialization" class="required color-black text-start fontsize-13 mb-0 font-500">Job Specialisation:</label>
                        <p class="fontsize-13 color-black mb-1 color-light">Tell the candidates about the expertise needed for this job.</p>
                        <!-- <input type="text" class="form-control mb-2 fontsize-14" require id="job_specialsation" name="job_specialisation"> -->
                        <div class="dropdown-container position-relative">
                            <div class="form-control mb-2" onclick="showSpecializationList()">
                                <span class="color-black fontsize-13" id="specialization-input"></span>
                                <span data-feather="chevron-down" class="color-black"></span>
                            </div>
                            <input type="hidden" id="hiddenSpecialization" name="specialization">
                            <div class="option-container border rounded shadow-sm bg-white p-2" id="optionsSpecialization">
                                <ul class="p-0 color-black fontsize-13" id="list__ul__Specialization">
                                    <li class="p-2 rounded" id="ActuarialScience/Statistic" onclick="specialization_select(this.id)">Actuarial Science/Statistic</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded bg-white p-4 mb-2">
                        <label for="salary" id="label_salary" class="fontsize-14 font-700 color-black d-block mb-2"><span data-feather="dollar-sign"></span> Salary</label>
                        <p class="fontsize-13 color-black">Candidates are more likely to apply for jobs that offer salary information.</p>
                        <label  class="required color-black text-start fontsize-13 mb-1 d-block">Salary Range:</label>
                        <div class="d-inline-flex align-items-center">
                            <div class="bg-light fontsize-14 btn border fontsize-500 color-black me-1">PHP</div>
                            <input type="text" class="form-control fontsize-14 me-2" id="salary01" name="salary01">
                            <div class="fontsize-13 color-black me-2">to</div>
                            <input type="text" class="form-control fontsize-14 me-2" id="salary02" name=salary02>

                        </div>
                    </div>
                    <div class="border rounded bg-white p-4 mb-2">
                        <label class="fontsize-14 font-700 color-black d-block mb-2"><span data-feather="check-circle"></span> Requirements:</label>
                        <label for="requirements" class="required color-light text-start fontsize-13 mb-1">Job Requirements:</label>
                        <div id="requirements_div">
                            <input type="text" class="form-control mb-2 fontsize-14" require>
                        </div>
                        <input type="hidden" id="requirements" name="requirements">
                        <button type="button" onclick="req_click()" class="btn bg-cp2 fontsize-13 font-500 mb-4"> Add<span class="text-white me-0 ms-2" data-feather="plus"></span></button>
                        <script>
                            function req_click() {
                                const cdiv = document.createElement('div')
                                const req_input = '<input type="text" class="form-control mb-2 fontsize-14" require>'
                                cdiv.innerHTML = req_input
                                document.getElementById('requirements_div').appendChild(cdiv)
                            }
                        </script>
                        <br>
                        <label for="qualifications" class="required  color-black text-start fontsize-13 mb-1">Job Qualifications:</label>
                        <div id="qualifications_div">
                            <input type="text" class="form-control mb-2 fontsize-14" require>
                        </div>
                        <input type="hidden" id="qualifications" name="qualifications">
                        <button type="button" onclick="qua_click()" class="btn bg-cp2 fontsize-13 font-500 mb-4"> Add<span class="text-white me-0 ms-2" data-feather="plus"></span></button>
                        <script>
                            function qua_click() {
                                const cdiv = document.createElement('div')
                                const qua_input = '<input type="text" class="form-control mb-2 fontsize-14" require>'
                                cdiv.innerHTML = qua_input
                                document.getElementById('qualifications_div').appendChild(cdiv)
                            }
                        </script>
                        <br>
                        <label for="responsibilities" class="required  color-black text-start fontsize-13 mb-1">Job Responsibilities:</label>
                        <div id="responsibilities_div">
                            <input type="text" class="form-control mb-2 fontsize-14" require id="job_responsibility_1">
                        </div>
                        <input type="hidden" id="responsibilities" name="responsibilities">
                        <button type="button" onclick="res_click()" class="btn bg-cp2 fontsize-13 font-500"> Add<span class="text-white me-0 ms-2" data-feather="plus"></span></button>
                        <script>
                            function res_click() {
                                const cdiv = document.createElement('div')
                                const res_input = '<input type="text" class="form-control mb-2 fontsize-14" require>'
                                cdiv.innerHTML = res_input
                                document.getElementById('responsibilities_div').appendChild(cdiv)
                            }
                        </script>
                    </div>

                    <div class="border rounded bg-white p-4 mb-2">
                        <label for="job_description" class="fontsize-14 font-700 color-black d-block mb-2"><span data-feather="check-circle"></span> Job Description:</label>
                        <p class="fontsize-13 color-light mb-1">Attract the right candidates by writting an overview about what's interesting about the job.</p>
                        <textarea name="job_description" id="job_description" cols="30" rows="5" class="form-control fontsize-14"></textarea>
                        <div class="swal2-validation-message fontsize-13 my-2 d-none" id="swal2-validation-message" style="display: flex;">
                            <!-- Invalid email address. -->
                        </div>
                        <button type="button" onclick="validate_jobsubmit()" class="btn bg-cp2 px-5 fontsize-13 mt-4 font-500">Post</button>
                    </div>
                </form>

            </div>
        </div>
    </main>
    <?php
    require "../html/footer.html";
    ?>
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/scroll.js"></script>
    <script src="../javascript/onclick.js"></script>
    <script src="../javascript/validations.js"></script>
    <script src="../javascript/jQueryRequest.js"></script>
    <script>
        loadPage();
        feather.replace();
        document.getElementById('web-id').href = "../index.php"
        document.getElementById('index-link').href = "../index.php"

        fetch("../textFile/position-levels.txt")
            .then((response) => response.text())
            .then((data) => {
                var array = data.split("\n");
                for (let i = 0; i < array.length; i++) {
                    const li__id = document.getElementById("CEO/SVP/AVP/VP/Director");
                    var clone = li__id.cloneNode(true);
                    clone.id = array[i].split(" ").join("");
                    clone.innerHTML = array[i];
                    const parentContainer = document.getElementById("list__ul__Position");
                    parentContainer.appendChild(clone);
                }
            });
        fetch("../textFile/specialization.txt")
            .then((response) => response.text())
            .then((data) => {
                var array = data.split("\n");
                for (let i = 0; i < array.length; i++) {
                    const li__id = document.getElementById("ActuarialScience/Statistic");
                    var clone = li__id.cloneNode(true);
                    clone.id = array[i].split(" ").join("");
                    clone.innerHTML = array[i];
                    const parentContainer = document.getElementById(
                        "list__ul__Specialization"
                    );
                    parentContainer.appendChild(clone);
                }
            });
    </script>
</body>

</html>