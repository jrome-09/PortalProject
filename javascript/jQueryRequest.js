function SubmitForm() {
    $.post("includes/registration.inc.php", $("#registrationForm").serialize(), function (data) {
        console.log(data);
        if (data == 'Email already exist.') {
            result.innerHTML = "*Email Already Existed";
        } else {
            Swal.fire({
                icon: 'success',
                title: 'Sign up Sucessful!',
                text: 'You have succesfully created your account. Please set up your profile.',
                confirmButtonText: 'Get Started'
            }).then(function(){
                window.location = "setup-profile-1.php";
            })
            
        }
    });
    document.getElementById("ball-loader").classList.remove("active");
}

function SubmitProfile1() {
    $.post("includes/formSubmit.inc.php", $("#formProfile1").serialize(), function (data) {
        console.log(data);
        if (data === "Data Inserted Successfully!") {
            window.location = "setup-profile-2.php"
        }
        document.getElementById("ball-loader").classList.remove("active");
    });
}