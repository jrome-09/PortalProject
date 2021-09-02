<div class="border rounded bg-white color-black fontsize-13 p-4 shadow-sm m-auto">
    <h3 class="font-700 mb-0">Start Hiring with us!</h3>
    <p class="color-light">Find the right person for your Company</p>
    <form action="#" id="employer_registration_form">
        <input type="hidden" name="employer_registration_form">
        <div class="row">
            <div class="col-md-8">
                <label for="emp-fname" class="color-light required">First Name</label>
                <input type="text" name="employer_fname" id="emp-fname" class="form-control fontsize-13 mb-2">
                <label for="emp-mname" class="color-light required">Middle Name</label>
                <input type="text" name="employer_mname" id="emp-mname" class="form-control fontsize-13 mb-2">
                <label for="emp-lname" class="color-light required">Last Name</label>
                <input type="text" name="employer_lname" id="emp-lname" class="form-control fontsize-13 mb-2">
            </div>
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                <div class="image-container hw-120px border rounded bg-light mb-2" >
                    <img src="" alt="" id="company_logo_upload">
                </div>
                <label for="hidden_company_logo" class="btn btn-primary fontsize-13 font-500 px-3">Upload Logo</label>
                <input type="file" class="d-none" onchange="readUpload02(this, '#company_logo_upload')" id="hidden_company_logo" name="company_logo">
            </div>
        </div>
        <label for="comp-name" class="color-light required">Company Name</label>
        <input type="text" name="comp-name" id="comp-name" class="form-control fontsize-13 mb-2">
        <label for="contact-number" class="color-light required">Contact Number</label>
        <div class="input-group flex-nowrap mb-0">
            <div class="px-2 d-flex bg-light justify-content-center align-items-center border-end-0 rounded-start border-input">
                <p class="mb-0 color-light me-2">+63</p>
            </div>
            <input type="text" class="form-control fontsize-14 border-start-0" id="contact-number" name="contact_number">
        </div>
        <p class="color-light fontsize-13">Please enter a 10-digit Mobile No. e.g. 917 1234567</p>
        <label for="company-address" class="color-light required">Company Address</label>
        <input type="text" name="company-address" id="company-address" class="form-control fontsize-13 mb-2">

        <label for="e-address" class="color-light required">Email Address</label>
        <input type="text" name="e-address" id="e-address" class="form-control fontsize-13 mb-2">
        <div class="row mb-0">
            <div class="col-md-6">
                <label for="emp-password" class="color-light required" id="password-label">Password</label>
                <input type="password" name="emp-pword" id="emp-password" class="form-control fontsize-13 mb-2">
            </div>
            <div class="col-md-6">
                <label for="emp-repassword" class="color-light required">Retype password</label>
                <input type="password" name="emp-repword" id="emp-repassword" class="form-control fontsize-13 mb-2">
            </div>
        </div>
        <div class="swal2-validation-message fontsize-13 my-2 d-none" id="swal2-validation-message" style="display: flex;">
            <!-- Invalid email address. -->
        </div>
        <p class="mb-0 color-light">By continuing, you acknowledge that you accept the <a href="#">Privacy Policies</a> and <a href="#">Terms & Conditions.</a> </p>

        <div class="text-end">
            <a href="#" class="btn btn-primary fontsize-14 font-500 px-5 py-2" onclick="validate_employer_form()">Register</a>
        </div>
    </form>
</div>