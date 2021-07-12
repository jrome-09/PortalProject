function SubmitForm() {
    $.post("includes/registration.inc.php", $("#registrationForm").serialize(), function (data) {
        if (data == 'Email already exist.') {
            result.innerHTML = "*Email Already Existed";
        } else if (data == "Something went wrong.") {
            console.log("Something went wrong! Please Refresh the page");
        } else if (data == "Data Inserted Successfully!") {
            Swal.fire({
                icon: 'success',
                title: 'Sign up Sucessful!',
                text: 'You have succesfully created your account. Please set up your profile.',
                confirmButtonText: 'Get Started'
            }).then(function () {
                window.location = "setup-profile-1.php";
            })
        } else if (data == "Statement Error") {
            console.log("Statement Error! Please Refresh the page.")
        } else {
            console.log(data);
        }
    });
    document.getElementById("ball-loader").classList.remove("active");
}

function SubmitProfile1() {
    $.post("includes/formSubmit.inc.php", $("#formProfile1").serialize(), function (data) {
        if (data === "Data Inserted Successfully!") {
            window.location = "setup-profile-2.php"
            console.log("Data Inserted Successfully!");
        } else {
            console.log("Something went wrong! PLease refresh the page." + " " + data);
        }
        document.getElementById("ball-loader").classList.remove("active");
    });
}

function submit_work_experience() {
    $.post("includes/formSubmit.inc.php", $("#user_experience_form").serialize(), function (data) {
        console.log(data);
        window.location = "Candidate/candidate.php";
    });
}

function login_user() {
    $.post("includes/login.inc.php", $("#login_form").serialize(), function (data) {
        console.log(data);
        if (data == "logged in.") {
            window.location = "Candidate/candidate.php";
        }
    });
}

function job_submit(job_id) {
    document.getElementById("form_job_input").value = job_id;
    form = document.getElementById("job_form_submit");
    form.submit();
}

function submit_job_id() {
    form = document.getElementById("hidden_job_id");
    form.submit();
}

function submit_application() {
    var form = $('#hidden_application_form')[0];
    var data = new FormData(form);
    $.ajax({
        type: "POST",
        enctype: "multipart/form-data",
        url: "../includes/formSubmit.inc.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function (data) {
            console.log(data);
        },
        error: function (e) {
            console.log(e.responseText);
        }
    })
    // $.post("../includes/formSubmit.inc.php", $("#hidden_application_form").serialize(), function (data) {
    //     console.log(data);
    // });
}