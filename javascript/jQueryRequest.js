function SubmitForm() {
    $.post("includes/registration.inc.php", $("#registrationForm").serialize(), function (data) {
        console.log(data);
        if (data == 'Email already existed.') {
            result.innerHTML = "*Email Already Existed";
        }
    });
}