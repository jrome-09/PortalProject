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

    document.getElementById("ball-loader").classList.add("active");
    setTimeout("SubmitProfile1()", 2000);
}

function past_experience_form_validation() {
    submit_work_experience();
}

function true_class(label) {
    label.classList.remove("color-black");
    label.classList.add("text-danger");
}

function false_class(label) {
    label.classList.remove("text-danger");
    label.classList.add("color-black");
}

function remove_value() {
    $("#sex").val("");
    $("#civil_status").val("");
    $("#residence").val("");
    $("#monthly_salary").val("");
    $("#organization_affiliation").val("");
    $("#academic_awards").val("");
}


function validate_alumni_form01() {
    remove_value();
    var ids = ["full_name", "contact_number", "email_address", "address", "age", "sex", "civil_status", "residence", "monthly_salary", "graduation_year", "degree_earned", "organization_affiliation", "academic_awards", "ict_certification"];
    var permission = false;

    var sex_chbx_ids = ['male_checkbox', 'female_checkbox'];

    if (document.getElementById(sex_chbx_ids[0]).checked) {
        document.getElementById('sex').value = "Male";
    } else if (document.getElementById(sex_chbx_ids[1].checked)) {
        document.getElementById('sex').value = "Female";
    }

    var civil_chbx_ids = ['single_checkbox', 'married_checkbox', 'separated_checkbox', 'widowed_checkbox'];
    var status = ['Single', 'Married', 'Separated', 'Widowed'];
    for (let i = 0; i < civil_chbx_ids.length; i++) {
        if (document.getElementById(civil_chbx_ids[i]).checked) {
            document.getElementById('civil_status').value = status[i];
        }
    }

    var residence_chbx_ids = ['urban_checkbox', 'rural_checkbox'];
    var residence = ["Urban", "Rural"];
    for (let i = 0; i < residence_chbx_ids.length; i++) {
        if (document.getElementById(residence_chbx_ids[i]).checked) {
            document.getElementById('residence').value = residence[i];
        }
    }

    var salary_chbx_ids = ['php1_checkbox', 'php2_checkbox', 'php3_checkbox', 'php4_checkbox']
    var salary = ['Below Php 10,000.00', 'PHP 10,000.00 - 19,999.99', 'Php 20,000.00 - 29,999.99', 'PHP 30,000.00 and above']
    for (let i = 0; i < salary_chbx_ids.length; i++) {
        if (document.getElementById(salary_chbx_ids[i]).checked) {
            document.getElementById('monthly_salary').value = salary[i];
        }
    }

    var affiliation_chbx_ids = ['studentleader_checkbox', 'studentjournalist_checkbox', 'organizationmember_checkbox']
    var affiliation = ['Student Leader', 'Student Journalist', 'Organization Member'];
    var affiliation_checked = "";
    for (let i = 0; i < affiliation_chbx_ids.length; i++) {
        if (document.getElementById(affiliation_chbx_ids[i]).checked) {
            affiliation_checked = affiliation_checked + "/" + affiliation[i];
        }
    }
    if (document.getElementById('otheraffiliation_input').value != "") {
        affiliation_checked = affiliation_checked + "/" + document.getElementById('otheraffiliation_input').value;
    }
    document.getElementById('organization_affiliation').value = affiliation_checked;

    var award_chbx_ids = ['none_checkbox', 'magnacumlaude_checkbox', 'cumlaude_checkbox', 'journalism_checkbox', 'leadership_checkbox', 'sportsaward_checkbox'];
    var awards = ['None', 'Magna Cum Laude', 'Cum Laude', 'Journalism Award', 'Leadership Award', 'Sports Award'];
    var awards_checked = "";
    for (let i = 0; i < award_chbx_ids.length; i++) {
        if (document.getElementById(award_chbx_ids[i]).checked) {
            awards_checked = awards_checked + "/" + awards[i];
        } 
    }
    if (document.getElementById('otherawards_input').value != "") {
        awards_checked = awards_checked + "/" + document.getElementById('otherawards_input').value;
    }
    document.getElementById('academic_awards').value = awards_checked;

    var certificates_chbx_ids = ['cssnc2_checkbox', 'anc2_checkbox', 't2danc2_checkbox', 't3danc2_checkbox', 'vgdnc3_checkbox', 'wdnc2_checkbox'];
    var certificates = ['TESDA Computer System Servicing NC II', 'TESDA Animation NC ll', 'TESDA 2D Animation NC lll', 'TESDA 3D Animation NC lll', 'TESDA Visual Graphic Design NC lll', 'TESDA Web Development NC lll']
    var certificates_checked = "";
    for (let i = 0; i < certificates_chbx_ids.length; i++) {
        if (document.getElementById(certificates_chbx_ids[i]).checked) {
            certificates_checked = certificates_checked + "/" + certificates[i];
        } 
    }
    if (document.getElementById('othercertificates_input').value != "") {
        certificates_checked = certificates_checked + "/" + document.getElementById('othercertificates_input').value;
    }
    document.getElementById('ict_certification').value = certificates_checked;


    for (let i = 0; i < ids.length; i++) {
        var value = document.getElementById(ids[i]).value;
        var labels = document.getElementsByTagName('label');
        if (value == "") {
            for (let x = 0; x < labels.length; x++) {
                if (labels[x].htmlFor === ids[i]) {
                    true_class(labels[x]);
                }
            }
            document.getElementById('error_result').innerHTML = "* Please make sure to fill up all needed requirements."
        } else {
            for (let x = 0; x < labels.length; x++) {
                if (labels[x].htmlFor === ids[i]) {
                    false_class(labels[x]);
                }
            }
            document.getElementById('error_result').innerHTML = "";
            permission = false;
        }
    }


    if (permission == true) {
        console.log("Permission Granted!")
    }
}