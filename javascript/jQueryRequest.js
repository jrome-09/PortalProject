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
            })
            
        }
    });
    document.getElementById("ball-loader").classList.remove("active");
}