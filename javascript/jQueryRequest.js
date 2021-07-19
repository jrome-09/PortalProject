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

function alumni_form01_submit() {
    $.post("includes/form_submit.inc.php", $("#form01_form").serialize(), function (data) {
        window.location = "form02.php";
    });
}

function alumni_form02_submit() {
    $.post("includes/form_submit.inc.php", $("#employment_profile_form").serialize(), function (data) {
        console.log(data);

        const status = ["Employed", "Self-Employed", "Unemployed", "Experienced Unemployed"];

        if (data === status[0]) {
            window.location = "form03-employed.php";
        } else if (data === status[1]) {
            window.location = "form03-self_employed.php";
        } else if (data === status[2]) {
            window.location = "form03-unemployed.php";
        } else if (data === status[3]) {
            window.location = "form03-experienced_unemployed.php";
        } else {
            alert("Something went wrong! Please refresh the page.");
        }
    });
}

// function alumni_submit_form03_employed() {
//     $.post("includes/form_submit.inc.php", $("#employment_profile_employed_form").serialize(), function (data) {
//         console.log(data);
//         if (data === "Session saved!") {
//             window.location = "form04-identification.php";
//         } else {
//             alert("Something went wrong! Please refresh the page.");
//         }
//     });
// }

function submit_alumni_form03(form) {
    $.post("includes/form_submit.inc.php", $("#" + form).serialize(), function (data) {
        console.log(data);
        if (data === "Session saved!") {
            window.location = "form04-identification.php";
        } else {
            alert("Something went wrong! Please refresh the page.");
        }
    });
}

function get_session() {
    $.post("includes/form_submit.inc.php", $("#get_session_form").serialize(), function (data) {
        console.log(data);
    });
}