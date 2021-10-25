function SubmitForm() {
  $.post(
    "includes/registration.inc.php",
    $("#registrationForm").serialize(),
    function (data) {
      if (data == "Email already exist.") {
        show_swal_validation("Email Already Existed");
      } else if (data == "Something went wrong.") {
        show_swal_validation("Something went wrong! Please Refresh the page");
        console.log("Something went wrong! Please Refresh the page");
      } else if (data == "Data Inserted Successfully!") {
        Swal.fire({
          icon: "success",
          title: "Signed up Sucessfully!",
          text: "You have successfully created your account. Please set up your profile.",
          confirmButtonText: "Get Started",
          customClass: {
            popup: "me-17px swal-width-400 font-poppins",
            title: "color-black font-700 fontsize-24",
            htmlContainer: "color-light pt-0 fontsize-13",
            confirmButton: "btn bg-cp2 fontsize-13 font-500 px-2",
          },
        }).then(function () {
          window.location = "setup-profile-1.php";
        });
      } else if (data == "Statement Error") {
        console.log("Statement Error! Please Refresh the page.");
      } else {
        console.log(data);
      }
    }
  );
  document.getElementById("ball-loader").classList.remove("active");
}

function SubmitProfile1() {
  $.post(
    "includes/formSubmit.inc.php",
    $("#formProfile1").serialize(),
    function (data) {
      if (data === "Data Inserted Successfully!") {
        window.location = "setup-profile-2.php";
        console.log("Data Inserted Successfully!");
      } else {
        console.log(
          "Something went wrong! PLease refresh the page." + " " + data
        );
      }
      document.getElementById("ball-loader").classList.remove("active");
    }
  );
}

function submit_work_experience() {
  $.post(
    "includes/formSubmit.inc.php",
    $("#user_experience_form").serialize(),
    function (data) {
      console.log(data);
      window.location = "Candidate/candidate.php";
    }
  );
}

function show_swal_validation(alert_text) {
  var swal_id = document.getElementById("swal2-validation-message");
  swal_id.classList.remove("d-none");
  swal_id.innerHTML = alert_text;
}

function hide_swal_validation() {
  document.getElementById("swal2-validation-message").classList.add("d-none");
}

function login_user(dir, log_dir) {
  $.post(
    dir,
    $("#login_form").serialize(),
    function (data) {
      console.log(data);
      if (data === "logged in.") {
        hide_swal_validation();
        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
          },
        });

        Toast.fire({
          icon: "success",
          title: "Signed in successfully",
        }).then(function () {
          window.location = log_dir;
        });

        //document.getElementById("swal2-validation-message").innerHTML = "";
        hide_swal_validation02('swal2-validation-message-log')
      } else if (data === "email does not exist.") {
        show_swal_validation02('swal2-validation-message-log', "Invalid email or password.");
      } else if (data === "wrong password.") {
        show_swal_validation02('swal2-validation-message-log', "Invalid email or password.");
      }
    }
  );
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
  var form = $("#hidden_application_form")[0];
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
      if (data === "success") {
        const icon = "success";
        const title = "Application Submitted!";
        const text = "You have successfully submitted your application.";
        const button = "Close";
        const location = "../Jobs/jobs.php";
        show_alert(icon, title, text, button, location);
      }
    },
    error: function (e) {
      console.log(e.responseText);
    },
  });
  // $.post("../includes/formSubmit.inc.php", $("#hidden_application_form").serialize(), function (data) {
  //     console.log(data);
  // });
}

function alumni_form01_submit() {
  $.post(
    "includes/form_submit.inc.php",
    $("#form01_form").serialize(),
    function (data) {
      window.location = "form02.php";
    }
  );
}

function alumni_form02_submit() {
  $.post(
    "includes/form_submit.inc.php",
    $("#employment_profile_form").serialize(),
    function (data) {
      console.log(data);

      const status = [
        "Employed",
        "Self-Employed",
        "Unemployed",
        "Currently Unemployed but had been employed before",
      ];

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
    }
  );
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
  $.post(
    "includes/form_submit.inc.php",
    $("#" + form).serialize(),
    function (data) {
      console.log(data);
      if (data === "Session saved!") {
        window.location = "form04-identification.php";
      } else {
        alert("Something went wrong! Please refresh the page.");
      }
    }
  );
}

function get_session() {
  $.post(
    "includes/form_submit.inc.php",
    $("#get_session_form").serialize(),
    function (data) {
      console.log(data);
    }
  );
}

//Alumni FORM
function submit_session() {
  var form = $("#sessionsubmit_form")[0];
  var data = new FormData(form);
  $.ajax({
    type: "POST",
    enctype: "multipart/form-data",
    url: "includes/form_submit.inc.php",
    data: data,
    processData: false,
    contentType: false,
    cache: false,
    timeout: 600000,
    success: function (data) {
      if (data === "Information Saved!") {
        const icon = "success";
        const title = "Information Submitted!";
        const text = "You have successfully submitted your information.";
        const button = "Close";
        const location = "form01.php";
        show_alert(icon, title, text, button, location);
      } else {
        const icon = "error";
        const title = "Submission Failed!";
        const text =
          "Failed submitting your Information. Please refresh the page and try again.";
        const button = "Close";
        const location = "form04-identification.php";
        console.log(data)
        show_alert(icon, title, text, button, location);
      }
    },
    error: function (e) {
      console.log(e.responseText);
    },
  });
  // $.post(
  //   "includes/form_submit.inc.php",
  //   $("#sessionsubmit_form").serialize(),
  //   function (data) {
  //     console.log(data);
  //     if (data === "Information Saved!") {
  //       const icon = "success";
  //       const title = "Information Submitted!";
  //       const text = "You have successfully submitted your information.";
  //       const button = "Close";
  //       const location = "form01.php";
  //       show_alert(icon, title, text, button, location);
  //     } else {
  //       const icon = "error";
  //       const title = "Submission Failed!";
  //       const text =
  //         "Failed submitting your Information. Please refresh the page and try again.";
  //       const button = "Close";
  //       const location = "form04-identification.php";
  //       show_alert(icon, title, text, button, location);
  //     }
  //   }
  // );
}

function submit_profileSetup02() {
  var form = $("#profile_setup02_form")[0];
  var data = new FormData(form);
  $.ajax({
    type: "POST",
    enctype: "multipart/form-data",
    url: "includes/formSubmit.inc.php",
    data: data,
    processData: false,
    contentType: false,
    cache: false,
    timeout: 600000,
    success: function (data) {
      if (data === "Success") {
        window.location = "setup-profile-2.php"
      }
    },
    error: function (e) {
      console.log(e.responseText);
    },
  });
}

function submit_experienceSetup03() {
  $.post(
    "includes/formSubmit.inc.php",
    $("#profile_setup03_form").serialize(),
    function (data) {
      console.log(data)
      if (data === "Success") {
        done();
      }
    }
  );
}

function submit_employer_form() {
  var form = $("#employer_registration_form")[0];
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
      if (data === "Registration Complete") {
        const icon = "success"
        const title = "Registration Success!"
        const text = "You have successfully registered as an Employer."
        const button = "OK"
        const location = ""
        show_alert(icon, title, text, button, location)
      } else if (data === "Email is already taken") {
        const icon = "error"
        const title = "Email is already Taken!"
        const text = "Please try another email."
        const button = "OK"
        const location = ""
        show_alert(icon, title, text, button, location)
      }
    },
    error: function (e) {
      console.log(e.responseText);
    },
  });
}

function employer_login() {
  $.post(
    "../includes/login.inc.php",
    $("#employer_login_form").serialize(),
    function (data) {
      if (data === "email does not exist.") {
        show_swal_validation_login("Invalid email or password.");
      } else if (data === "wrong password.") {
        show_swal_validation_login("Invalid email or password.");
      } else if (data === "logged in.") {
        document.getElementById("swal2-validation-message02").classList.add("d-none")
        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
          },
        });

        Toast.fire({
          icon: "success",
          title: "Signed in successfully",
        }).then(function () {
          window.location = "employer-page.php";
        });
      } else {
        console.log("console:" + data);
      }

    }
  );
}

function login_emp(dir, log_dir) {
  $.post(
    dir,
    $("#login_form").serialize(),
    function (data) {
      console.log(data);
      const swal_id = document.getElementById("swal3-validation-message");
      if (data === "logged in.") {
        swal_id.classList.add("d-none");
        document.getElementById("swal3-validation-message").innerHTML = "";
        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
          },
        });

        Toast.fire({
          icon: "success",
          title: "Signed in successfully",
        }).then(function () {
          window.location = log_dir;
          console.log('data')
          return false;
        });

        //document.getElementById("swal3-validation-message").innerHTML = none;
      } else if (data === "email does not exist.") {
        swal_id.classList.remove("d-none");
        swal_id.innerHTML = "Invalid email or password.";
        //show_swal_validation("Invalid email or password.");
      } else if (data === "wrong password.") {
        swal_id.classList.remove("d-none");
        swal_id.innerHTML = "Invalid email or password.";
        //show_swal_validation("Invalid email or password.");
      }
    }
  );
}

function submit_jobpost() {
  $.post(
    'includes/job_submit.php',
    $("#job_form").serialize(),
    function (data) {
      console.log(data)
      if (data === "Success") {

        const icon = 'success'
        const title = 'Success!!'
        const text = 'The job has been posted and can now be seen by jobseekers.'
        const button = 'Ok'
        const location = 'employer-page.php'

        show_alert(icon, title, text, button, location)
      } else {
        alert('Something went wrong while inserting the data. Please refresh the page.')
      }
    }
  );
}