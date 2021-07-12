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
<div class="border bg-white rounded">
    <div class="border-bottom p-4 ">
        <div class="text-end">
            <p class="font-super--small color-light">Last Updated: 00 Jan 2021</p>
        </div>
        <div class="d-flex" id="header-infoflex">
            <div class="border bg-light image-container rounded" style="height: 100px; width: 100px; min-width: 100px;">

            </div>
            <div class="mt-1 ms-3" id="infoflex-text">
                <h5 class="text-primary">Jerome Cabrera</h5>
                <p class="fontsize-14 m-0 font-500 color-black">Computer Science/Information Technology (Graduation Date: Jan 2021)</p>
                <p class="fontsize-14 font-500 color-black">University of the Northern Philippines</p>
                <div class="d-flex con-con">
                    <div class="mb-0 color-light fontsize-13 d-inline-block">
                        <span data-feather="phone"></span>
                        (+63) 9056275732
                    </div>
                    <p class="mx-2 d-inline-block mb-0 separator">|</p>
                    <div class="mb-0 color-light fontsize-13 d-inline-block">
                        <span data-feather="mail"></span>
                        sampleemail@gmail.com
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4 border-bottom">
        <div class="d-flex mb-3 align-items-center">
            <span data-feather="users" class="me-2"></span>
            <h5 class="font-500 mb-0">Education</h5>
        </div>

        <div class="row">
            <div class="col-md-2">
                <p class="m-0 color-light fontsize-13 font-500">Graduation Date: Jan 2021</p>
            </div>
            <div class="col-md-10">
                <p class="fontsize-14 color-black font-500 m-0">University of the Northern Philippines</p>
                <p class="fontsize-14 color-black font-500">Computer Science/Information Technology</p>
            </div>
        </div>
    </div>
    <div class="p-4">
        <div class="d-flex mb-3 align-items-center">
            <span data-feather="menu" class="me-2"></span>
            <h5 class="font-500 mb-0">Aditional Info</h5>
        </div>
        <div class="row mb-2">
            <div class="col-lg-2">
                <p class="color-light fontsize-13 mb-0">Address:</p>
            </div>
            <div class="col-lg-10">
                <p class="color-black fontsize-14 mb-0">Vigan City Ilocos Sur</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <p class="color-light fontsize-13 mb-0">Gender:</p>
            </div>
            <div class="col-lg-10">
                <p class="color-black fontsize-14 mb-0">Male</p>
            </div>
        </div>
    </div>
</div>
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
    <button type="submit" onclick="submit_application()" type="button" class="btn btn-primary fontsize-13 font-500 px-5 py-2">Submit</button>
</div>