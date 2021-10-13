<style>
    @media screen and (max-width: 961px) {
        #header-infoflex {
            flex-direction: column;
        }

        #infoflex-text {
            margin: 0 !important;
            margin-top: 1.5rem !important;
        }

        .con-con {
            flex-direction: column;
        }

        .separator {
            display: none !important;
        }
    }
</style>
<div class="p-4 bg-white border rounded mb-2">
    <div class="text-end">
        <p class="font-super--small color-light">Last Updated: <?php echo $get_uid['date_updated']; ?></p>
    </div>
    <div class="d-flex" id="header-infoflex">
        <div class="border bg-light image-container rounded" style="height: 100px; width: 100px; min-width: 100px;">
            <img src="<?php echo $profile_image; ?>" alt="">
        </div>
        <div class="mt-1 ms-3" id="infoflex-text">

            <h4 class="color-black font-500"><?php echo $get_uid["first_name"] . " " . $get_uid["last_name"]; ?></h4>
            <p class="fontsize-13 m-0 font-500 color-light"><?php echo $college["field"] . "(Graduation Year: " . $college["graduation_year"] . ")"; ?></p>
            <p class="fontsize-13 font-500 color-light"><?php echo $college["university"] ?></p>
            <div class="d-flex con-con">
                <div class="mb-0 color-light fontsize-13 d-inline-block">
                    <span data-feather="phone"></span>
                    <span class="tu">
                        <?php echo $get_uid["contact_number"]; ?>
                    </span>
                </div>
                <p class="mx-2 d-inline-block mb-0 separator">|</p>
                <div class="mb-0 color-light fontsize-13 d-inline-block">
                    <span data-feather="mail"></span>
                    <span class="tu">
                        <?php echo $get_uid["email_address"]; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="border bg-white rounded">
    <div class="p-4">
        <div class="d-flex mb-3 align-items-center">
            <span data-feather="users" class="me-2"></span>
            <p class="font-700 mb-0 fontsize-14 color-black">Education</p>
        </div>
        <div class="row ms-2">
            <div class="col-lg-2">
                <p class="color-black mb-2 fontsize-13">University:</p>
            </div>
            <div class="col-lg-10">
                <p class="color-black mb-2 fontsize-13"><?php echo $college["university"]; ?></p>
            </div>
        </div>
        <div class="row ms-2">
            <div class="col-lg-2">
                <p class="color-black mb-2 fontsize-13">Field of study:</p>
            </div>
            <div class="col-lg-10">
                <p class="color-black mb-2 fontsize-13"><?php echo $college["field"]; ?></p>
            </div>
        </div>
        <div class="row ms-2">
            <div class="col-lg-2">
                <p class="color-black mb-2 fontsize-13">Graduation Year:</p>
            </div>
            <div class="col-lg-10">
                <p class="color-black mb-2 fontsize-13"><?php echo $college["graduation_year"]; ?></p>
            </div>
        </div>
        <div class="row ms-2">
            <div class="col-lg-2">
                <p class="color-black mb-2 fontsize-13">University Address:</p>
            </div>
            <div class="col-lg-10">
                <p class="color-black mb-2 fontsize-13"><?php echo $college["university_address"]; ?></p>
            </div>
        </div>
        <hr>
    </div>
    <?php if ($experience) {
    ?>
        <div class="pt-0 p-4 border-bottom">
            <div class="d-flex mb-3 align-items-center">
                <span data-feather="briefcase" class="me-2"></span>
                <h5 class="font-700 fontsize-14 mb-0 color-black">Work Experience</h5>
            </div>
            <div class="row ms-2">
                <div class="col-lg-2">
                    <p class="color-black mb-2 fontsize-13">Employer:</p>
                </div>
                <div class="col-lg-10">
                    <p class="color-black mb-2 fontsize-13"><?php echo $experience["employer_name"]; ?></p>
                </div>
            </div>
            <div class="row ms-2">
                <div class="col-lg-2">
                    <p class="color-black mb-2 fontsize-13">Company Address:</p>
                </div>
                <div class="col-lg-10">
                    <p class="color-black mb-2 fontsize-13"><?php echo $experience["company_address"]; ?></p>
                </div>
            </div>
            <div class="row ms-2">
                <div class="col-lg-2">
                    <p class="color-black mb-2 fontsize-13">Recent Position:</p>
                </div>
                <div class="col-lg-10">
                    <p class="color-black mb-2 fontsize-13"><?php echo $experience["position_title"]; ?></p>
                </div>
            </div>
            <div class="row ms-2">
                <div class="col-lg-2">
                    <p class="color-black mb-2 fontsize-13">Specialization:</p>
                </div>
                <div class="col-lg-10">
                    <p class="color-black mb-2 fontsize-13"><?php echo $experience["specialization"]; ?></p>
                </div>
            </div>
            <div class="row ms-2">
                <div class="col-lg-2">
                    <p class="color-black mb-2 fontsize-13">Industry:</p>
                </div>
                <div class="col-lg-10">
                    <p class="color-black mb-2 fontsize-13"><?php echo $experience["industry"]; ?></p>
                </div>
            </div>
            <div class="row ms-2">
                <div class="col-lg-2">
                    <p class="color-black mb-2 fontsize-13">Position Level:</p>
                </div>
                <div class="col-lg-10">
                    <p class="color-black mb-2 fontsize-13"><?php echo $experience["position_level"]; ?></p>
                </div>
            </div>
            <div class="row ms-2">
                <div class="col-lg-2">
                    <p class="color-black mb-2 fontsize-13">Monthly Salary:</p>
                </div>
                <div class="col-lg-10">
                    <p class="color-black mb-2 fontsize-13"><?php echo "PHP " . $experience["monthly_salary"]; ?></p>
                </div>
            </div>
            <div class="row ms-2">
                <div class="col-lg-2">
                    <p class="color-black mb-2 fontsize-13">Experience:</p>
                </div>
                <div class="col-lg-10">
                    <p class="color-black mb-2 fontsize-13"><?php echo $experience["experience_description"]; ?></p>
                </div>
            </div>
        </div>
    <?php
    } ?>
    <div class="p-4">
        <div class="d-flex mb-3 align-items-center">
            <span data-feather="menu" class="me-2"></span>
            <h5 class="font-700 mb-0 fontsize-14 color-black">Aditional Info</h5>
        </div>
        <div class="row ms-2">
            <div class="col-lg-2">
                <p class="color-black mb-2 fontsize-13">Age:</p>
            </div>
            <div class="col-lg-10">
                <p class="color-black mb-2 fontsize-13"><?php echo $get_uid["age"]; ?></p>
            </div>
        </div>
        <div class="row ms-2">
            <div class="col-lg-2">
                <p class="color-black mb-2 fontsize-13">Sex:</p>
            </div>
            <div class="col-lg-10">
                <p class="color-black mb-2 fontsize-13"><?php echo $get_uid["sex"]; ?></p>
            </div>
        </div>
        <div class="row ms-2">
            <div class="col-lg-2">
                <p class="color-black mb-2 fontsize-13">Address:</p>
            </div>
            <div class="col-lg-10">
                <p class="color-black mb-2 fontsize-13"><?php echo $get_uid["address"]; ?></p>
            </div>
        </div>
        <div class="row ms-2">
            <div class="col-lg-2">
                <p class="color-black mb-2 fontsize-13">Experience Type:</p>
            </div>
            <div class="col-lg-10">
                <p class="color-black mb-2 fontsize-13"><?php echo $get_uid["experience_type"]; ?></p>
            </div>
        </div>
        <div class="row ms-2">
            <div class="col-lg-2">
                <p class="color-black mb-2 fontsize-13">About Myself:</p>
            </div>
            <div class="col-lg-10">
                <p class="color-black mb-2 fontsize-13"><?php echo $get_uid["self_description"]; ?></p>
            </div>
        </div>
    </div>
</div>
<div id="preview_actions">
    <div class="d-flex flex-column my-4" style="max-width: 500px;">
        <p class="fontsize-13 color-light font-500 mb-0">Submit your resume:</p>
        <p class="font-super--small text-primary mb-2 font-500"> By submitting your resume, you let the employers to know you more and to make hiring decisions and help you get your first interview. </p>
        <form action="#" id="hidden_application_form">
            <input type="hidden" name="resume_file">
            <input type="file" class="form-control fontsize-14" name="uploaded_resume_file">
            <input type="hidden" name="job_id" value="<?php echo $_POST["job_id-hidden_input"]; ?>">
            <input type="hidden" name="job_name" value="<?php echo $_POST["job_name-hidden_input"]; ?>">
            <input type="hidden" name="employer_id" value="<?php echo $_POST["employer_id-hidden_input"]; ?>">
            <input type="hidden" name="employer_name" value="<?php echo $_POST["employer_name-hidden_input"]; ?>">
        </form>
    </div>
    <div class="text-end">
        <button type="submit" onclick="submit_application()" type="button" class="btn bg-cp2 fontsize-13 font-500 px-5 py-2">Submit</button>
    </div>
</div>