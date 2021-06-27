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
        }else if (data == "Statement Error") {
            console.log("Statement Error! Please Refresh the page.")
        }else{
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
        }else{
            console.log("Something went wrong! PLease refresh the page." + " " + data);
        }
        document.getElementById("ball-loader").classList.remove("active");
    });
}