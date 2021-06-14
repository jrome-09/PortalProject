function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function passwordKeypress() {
    document.getElementById('password-result').classList.remove('text-danger');
}

function validatePhoneNumber(number) {
    const id = document.getElementById("number-result")
    var result = "";
    if (number.length !== 11) {
        result = "invalid";
    } else if (number.charAt(0) !== "0" || number.charAt(1) !== "9") {
        result = "invalid"
    }

    if (result == "invalid") {
        id.style.color = "red";
        id.style.fontWeight = "bold";
        return false;
    } else {
        id.style.color = "#000";
        id.style.fontWeight = "";
        return true;
    }
}

function ValidatePassword(password) {
    if (password.length < 8) {
        console.log('password must be greater than 8 characters');
        return false;
    } else {
        if (/\d/.test(password)) {
            return true;
        } else {
            return false;
        }

    }
}

function CheckForm() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const conpassword = document.getElementById('confirmpassword').value;
    const result = document.getElementById("result");
    result.innerHTML = "";

    if (email == "" || password == "" || conpassword == "") {
        result.innerHTML = "*Please fill up all requirements.";
    } else {
        if (validateEmail(email)) {
            if (ValidatePassword(password)) {
                if (password != conpassword) {
                    result.innerHTML = "*Password not matched"
                } else {
                    if (document.getElementById('Conditions-checkBox').checked == true) {
                        document.getElementById("ball-loader").classList.add("active");
                        console.log('Validation Complete!');
                        setTimeout("SubmitForm()", 2000);

                    } else {
                        console.log('Agree to the Terms and Conditions.')
                    }
                }
            } else {
                document.getElementById('password-result').classList.add("text-danger");
            }
        } else {
            result.innerHTML = "*Invalid Email address.";
        }

    }
}

function ValidateProfile1() {
    var exp = '';
    if (document.getElementById("work--xp").checked) {
        exp = 'experienced';
    } else if (document.getElementById("student--xp").checked) {
        exp = 'student';
    }

    console.log("Work Experience: " + exp); 
    document.getElementById('experienceType').value = exp;

    SubmitProfile1();
}
