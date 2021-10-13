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

function validate_login(dir, dir2) {
	var ids = ["login--email", "login-password"];
	var permission;

	var error_empty;
	for (let i = 0; i < ids.length; i++) {
		var value = document.getElementById(ids[i]).value;
		var labels = document.getElementsByTagName('label');
		if (value == "") {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					true_class(labels[x]);
				}
			}
			error_empty = true;
		} else {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					false_class(labels[x]);
				}
			}
		}
	}

	if (error_empty) {
		show_swal_validation02('swal2-validation-message-log',"Please input your email and password");
		permission = false;
	} else {
		hide_swal_validation02('swal2-validation-message-log')
		//document.getElementById("swal2-validation-message-log").innerHTML = "";
		permission = true;
	}

	if (permission) {
		login_user(dir, dir2);
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
	// result.innerHTML = "";
	hide_swal_validation();

	if (email == "" || password == "" || conpassword == "") {
		// result.innerHTML = "*Please fill up all requirements.";
		show_swal_validation("Please fill up all required fields.");
	} else {
		if (validateEmail(email)) {
			if (ValidatePassword(password)) {
				if (password != conpassword) {
					// result.innerHTML = "*Password not matched"
					show_swal_validation("Password not matched.");
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
				show_swal_validation("Check your password.");
			}
		} else {
			// result.innerHTML = "*Invalid Email address.";
			show_swal_validation("Invalid Email address.");
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

function clear_value(ids) {
	for (let i = 0; i < ids.length; i++) {
		document.getElementById(ids[i]).value = "";
	}
}


function validate_alumni_form01() {
	var chckbxs = ['sex', 'civil_status', 'residence', 'monthly_salary', 'organization_affiliation', 'academic_awards']
	clear_value(chckbxs);
	var ids = ["full_name", "contact_number", "email_address", "address", "age", "sex", "civil_status", "residence", "monthly_salary", "graduation_year", "degree_earned", "organization_affiliation", "academic_awards", "ict_certification"];
	var permission;

	var sex_chbx_ids = ['male_checkbox', 'female_checkbox'];
	if (document.getElementById(sex_chbx_ids[0]).checked) {
		document.getElementById('sex').value = "Male";
	} else if (document.getElementById(sex_chbx_ids[1]).checked) {
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

	var error_empty;
	for (let i = 0; i < ids.length; i++) {
		var value = document.getElementById(ids[i]).value;
		var labels = document.getElementsByTagName('label');
		if (value == "") {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					true_class(labels[x]);
				}
			}
			error_empty = true;
		} else {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					false_class(labels[x]);
				}
			}
		}
	}

	if (error_empty) {
		//document.getElementById('error_result').innerHTML = "* Please make sure to fill up all needed requirements."
		show_swal_validation02('swal2-validation-message','Please fill up all required fields.')
		permission = false;
	} else {
		//document.getElementById('error_result').innerHTML = "";
		hide_swal_validation02('swal2-validation-message')
		permission = true;
	}

	if (permission) {
		alumni_form01_submit();
	}
}

function validate_employment_profile() {
	$("#employment_status").val("");
	var permission = false;

	var employments_chbx_ids = ["employed_checkbox", "self-employed_checkbox", "unemployed_checkbox", "exp-unemployed_checkbox"];
	var employments = ["Employed", "Self-Employed", "Unemployed", "Experienced Unemployed"];
	for (let i = 0; i < employments_chbx_ids.length; i++) {
		if (document.getElementById(employments_chbx_ids[i]).checked) {
			document.getElementById('employment_status').value = employments[i];
		}
	}

	if (document.getElementById("employment_status").value == "") {
		var labels = document.getElementsByTagName('label');
		for (let x = 0; x < labels.length; x++) {
			if (labels[x].htmlFor === "employment_status") {
				true_class(labels[x]);
				//document.getElementById('error_result').innerHTML = "* Please make sure to fill up all needed requirements."
				show_swal_validation02('swal2-validation-message','Please fill up all required fields.')
			}
		}
		persmission = false;
	} else {
		permission = true;
	}

	if (permission) {
		alumni_form02_submit();
	}
}

function validate_alumni_form03_employed() {
	var chckbxs = ['employment_field', 'monthly_income', 'employment_field', 'employment_length', 'ict_related']
	clear_value(chckbxs);
	var ids = ["employer_name", "employer_address", "present_position", "employment_type", "monthly_income", "employment_field", "employment_length", "ict_related"];
	var permission;

	var status_chbx_ids = ['permanent_checkbox', 'temporary_checkbox', 'contractual_checkbox', 'casual_checkbox'];
	var status = ['Permanent', 'Temporary', 'Contractual', 'Casual'];
	for (let i = 0; i < status_chbx_ids.length; i++) {
		if (document.getElementById(status_chbx_ids[i]).checked) {
			document.getElementById('employment_type').value = status[i];
		}
	}

	var income_chbx_ids = ['php1_checkbox', 'php2_checkbox', 'php3_checkbox', 'php4_checkbox'];
	var income = ['Below Php 10,000.00', 'PHP 10,000.00 - 19,999.99', 'Php 20,000.00 - 29,999.99', 'PHP 30,000.00 and above']
	for (let i = 0; i < income_chbx_ids.length; i++) {
		if (document.getElementById(income_chbx_ids[i]).checked) {
			document.getElementById('monthly_income').value = income[i];
		}
	}

	var field_chbx_ids = ['government_checkbox', 'private_checkbox'];
	var field = ['Government', 'Private']
	for (let i = 0; i < field_chbx_ids.length; i++) {
		if (document.getElementById(field_chbx_ids[i]).checked) {
			document.getElementById('employment_field').value = field[i];
		}
	}

	var length_chbx_ids = ['day0006_checkbox', 'day0712_checkbox', 'day1318_checkbox', 'day1924_checkbox', 'day24above_checkbox'];
	var length = ['0 - 6 months', '7 - 12 months', '13 - 18 months', '19 - 24 months', 'more than 24 months']
	for (let i = 0; i < length_chbx_ids.length; i++) {
		if (document.getElementById(length_chbx_ids[i]).checked) {
			document.getElementById('employment_length').value = length[i];
		}
	}

	var related_chbx_ids = ['ictyes_checkbox', 'ictno_checkbox'];
	var related = ['Yes', 'No']
	for (let i = 0; i < related_chbx_ids.length; i++) {
		if (document.getElementById(related_chbx_ids[i]).checked) {
			document.getElementById('ict_related').value = related[i];
		}
	}

	var error_empty;
	for (let i = 0; i < ids.length; i++) {
		var value = document.getElementById(ids[i]).value;
		var labels = document.getElementsByTagName('label');
		if (value == "") {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					true_class(labels[x]);
				}
			}
			error_empty = true;
		} else {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					false_class(labels[x]);
				}
			}
		}
	}

	if (error_empty) {
		show_swal_validation02('swal2-validation-message','Please fill up all required fields.')
		//document.getElementById('error_result').innerHTML = "* Please make sure to fill up all needed requirements."
		permission = false;
	} else {
		//document.getElementById('error_result').innerHTML = "";
		hide_swal_validation02('swal2-validation-message')
		permission = true;
	}

	if (permission) {
		var form_id = "employment_profile_employed_form"
		submit_alumni_form03(form_id);
	}
}

function validate_alumni_form03_self_employed() {
	var chckbxs = ['reasons', 'monthly_income']
	clear_value(chckbxs);
	var ids = ["reasons", "business_type", "business_name", "business_description", "monthly_income"];
	var permission;

	var reason_chbx_ids = ['reason01_checkbox', 'reason02_checkbox', 'reason03_checkbox', 'reason04_checkbox', 'reason05_checkbox', 'reason06_checkbox']
	var reason = ['I am managing a family-owned company.', 'I wanted to open my own business.', 'I prefer working freelance than in a company.',
		'I cannot find a job opportunity related to my field.', 'There are job offerings relevant to my course but the salary is too low.',
		'I applied for jobs relevant to my field but I lacked experience.'];
	var reason_checked = "";
	for (let i = 0; i < reason_chbx_ids.length; i++) {
		if (document.getElementById(reason_chbx_ids[i]).checked) {
			reason_checked = reason_checked + "/" + reason[i];
		}
	}
	if (document.getElementById('otherreason_input').value != "") {
		reason_checked = reason_checked + "/" + document.getElementById('otherreason_input').value;
	}
	document.getElementById('reasons').value = reason_checked;

	var income_chbx_ids = ['php1_checkbox', 'php2_checkbox', 'php3_checkbox', 'php4_checkbox'];
	var income = ['Below Php 10,000.00', 'PHP 10,000.00 - 19,999.99', 'Php 20,000.00 - 29,999.99', 'PHP 30,000.00 and above']
	for (let i = 0; i < income_chbx_ids.length; i++) {
		if (document.getElementById(income_chbx_ids[i]).checked) {
			document.getElementById('monthly_income').value = income[i];
		}
	}

	var error_empty;
	for (let i = 0; i < ids.length; i++) {
		var value = document.getElementById(ids[i]).value;
		var labels = document.getElementsByTagName('label');
		if (value == "") {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					true_class(labels[x]);
				}
			}
			error_empty = true;
		} else {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					false_class(labels[x]);
				}
			}
		}
	}

	if (error_empty) {
		//document.getElementById('error_result').innerHTML = "* Please make sure to fill up all needed requirements."
		show_swal_validation02('swal2-validation-message','Please fill up all required fields.')
		permission = false;
	} else {
		//document.getElementById('error_result').innerHTML = "";
		hide_swal_validation02('swal2-validation-message')
		permission = true;
	}

	if (permission) {
		var form_id = "employment_profile_self_employed_form"
		submit_alumni_form03(form_id);
	}
}

function validate_alumni_form03_unemployed() {
	document.getElementById("reasons").value = "";
	var permission;

	var reason_chbx_ids = ["reason01_checkbox", "reason02_checkbox", "reason03_checkbox", "reason04_checkbox", "reason05_checkbox"];
	var reason = ["I cannot find a job opportunity related to my field.", "There are IT-related job offerings but the salary is too low.", " I wasn’t hired because of lack of work experience.", "I had to take care of family concerns.", "I have health problem."];
	var reason_checked = "";
	for (let i = 0; i < reason_chbx_ids.length; i++) {
		if (document.getElementById(reason_chbx_ids[i]).checked) {
			reason_checked = reason_checked + "/" + reason[i];
		}
	}
	if (document.getElementById('otherreason_input').value != "") {
		reason_checked = reason_checked + "/" + document.getElementById('otherreason_input').value;
	}
	document.getElementById('reasons').value = reason_checked;

	var error_empty;
	var value = document.getElementById("reasons").value;
	var labels = document.getElementsByTagName('label');
	if (value == "") {
		for (let x = 0; x < labels.length; x++) {
			if (labels[x].htmlFor === "reasons") {
				true_class(labels[x]);
			}
		}
		error_empty = true;
	} else {
		for (let x = 0; x < labels.length; x++) {
			if (labels[x].htmlFor === "reasons") {
				false_class(labels[x]);
			}
		}
	}

	if (error_empty) {
		//document.getElementById('error_result').innerHTML = "* Please make sure to fill up all needed requirements."
		show_swal_validation02('swal2-validation-message','Please fill up all required fields.')
		permission = false;
	} else {
		//document.getElementById('error_result').innerHTML = "";
		hide_swal_validation02('swal2-validation-message')
		permission = true;
	}

	if (permission) {
		var form_id = "employment_profile_unemployed_form"
		submit_alumni_form03(form_id);
	}
}

function validate_af03_exp_employed() {
	document.getElementById("reasons").value = "";
	var ids = ["employer_name-exp", "recent_position", "reasons"];
	var permission;

	var reason_chbx_ids = ['reason01_checkbox', 'reason02_checkbox', 'reason03_checkbox', 'reason04_checkbox']
	var reason = ['My salary was low.', 'I had to take care of family concerns.', 'I have health problem.', 'My recent work was not related to my specialization'];
	var reason_checked = "";
	for (let i = 0; i < reason_chbx_ids.length; i++) {
		if (document.getElementById(reason_chbx_ids[i]).checked) {
			reason_checked = reason_checked + "/" + reason[i];
		}
	}
	if (document.getElementById('otherreason_input').value != "") {
		reason_checked = reason_checked + "/" + document.getElementById('otherreason_input').value;
	}
	document.getElementById('reasons').value = reason_checked;

	var error_empty;
	for (let i = 0; i < ids.length; i++) {
		var value = document.getElementById(ids[i]).value;
		var labels = document.getElementsByTagName('label');
		if (value == "") {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					true_class(labels[x]);
				}
			}
			error_empty = true;
		} else {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					false_class(labels[x]);
				}
			}
		}
	}

	if (error_empty) {
		//document.getElementById('error_result').innerHTML = "* Please make sure to fill up all needed requirements."
		show_swal_validation02('swal2-validation-message','Please fill up all required fields.')
		permission = false;
	} else {
		//document.getElementById('error_result').innerHTML = "";
		hide_swal_validation02('swal2-validation-message')
		permission = true;
	}

	if (permission) {
		var form_id = "employment_profile_experienced_employed_form"
		submit_alumni_form03(form_id);
	}
}

function validate_setup_part01() {
	var chckbxs = ["experienceType", "sex"]
	clear_value(chckbxs);
	var exp_chbx_ids = ['work--xp', 'student--xp'];
	var exp = ["Experienced", "Student/Fresh Graduate"];
	for (let i = 0; i < exp_chbx_ids.length; i++) {
		if (document.getElementById(exp_chbx_ids[i]).checked) {
			document.getElementById('experienceType').value = exp[i];
			console.log("Experience Type: " + exp[i]);
		}
	}

	var sex_chbx_ids = ['male_checkbox', 'female_checkbox'];
	var sex = ["Male", "Female"];
	for (let i = 0; i < sex_chbx_ids.length; i++) {
		if (document.getElementById(sex_chbx_ids[i]).checked) {
			document.getElementById('sex').value = sex[i];
			console.log("Sex: " + sex[i]);
		}
	}

	submit_profileSetup02();
}

function validate_setup_part03() {
	document.getElementById('monthly_salary').value = "";
	var salary_chbx_ids = ['php1_checkbox', 'php2_checkbox', 'php3_checkbox', 'php4_checkbox']
	var salary = ['Below Php 10,000.00', 'PHP 10,000.00 - 19,999.99', 'Php 20,000.00 - 29,999.99', 'PHP 30,000.00 and above']
	for (let i = 0; i < salary_chbx_ids.length; i++) {
		if (document.getElementById(salary_chbx_ids[i]).checked) {
			document.getElementById('monthly_salary').value = salary[i];
		}
	}

	submit_experienceSetup03();
}

function validate_employer_form() {
	var ids = ["emp-fname", "emp-mname", "emp-lname", "comp-name", "contact-number", "company-address", "e-address", "emp-password", "emp-repassword"];
	var permission;

	var error_empty;
	for (let i = 0; i < ids.length; i++) {
		var value = document.getElementById(ids[i]).value;
		var labels = document.getElementsByTagName('label');
		if (value == "") {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					true_class(labels[x]);
				}
			}
			error_empty = true;
		} else {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					false_class(labels[x]);
				}
			}
		}
	}

	if (error_empty) {
		show_swal_validation02('swal2-validation-message-sign', "Please make sure to fill up all needed requirements.");
		permission = false;
	} else {
		hide_swal_validation02('swal2-validation-message-sign')
		const email = document.getElementById('e-address').value
		const password = document.getElementById('emp-password').value
		const repassword = document.getElementById('emp-repassword').value
		if (validateEmail(email)) {
			document.getElementById("swal2-validation-message-sign").classList.add("d-none");
			if (ValidatePassword(password)) {
				document.getElementById('password-label').classList.remove("text-danger");
				if (password != repassword) {
					document.getElementById('password-label').classList.add("text-danger");
					show_swal_validation02('swal2-validation-message-sign', "Password not matched.");
				} else {
					//VerificationPassed*CodeHere
					submit_employer_form()
				}
			} else {
				document.getElementById('password-label').classList.add("text-danger");
				show_swal_validation02('swal2-validation-message-sign', "Check your password.");
			}
		} else {
			show_swal_validation02('swal2-validation-message-sign', "Invalid Email address.");
		}
	}
}

// function validate_emp_login() {
// 	const ids = ['login--email', 'login--password']
// 	var permission;

// 	var error_empty;
// 	for (let i = 0; i < ids.length; i++) {
// 		var value = document.getElementById(ids[i]).value;
// 		var labels = document.getElementsByTagName('label');
// 		if (value == "") {
// 			for (let x = 0; x < labels.length; x++) {
// 				if (labels[x].htmlFor === ids[i]) {
// 					true_class(labels[x]);
// 				}
// 			}
// 			error_empty = true;
// 		} else {
// 			for (let x = 0; x < labels.length; x++) {
// 				if (labels[x].htmlFor === ids[i]) {
// 					false_class(labels[x]);
// 				}
// 			}
// 		}
// 	}

// 	if (error_empty) {
// 		show_swal_validation_login("Make sure to fill up all needed fields.");
// 		permission = false;
// 	}else{
// 		const email = document.getElementById('login--email').value
// 		const password = document.getElementById('login--password').value
// 		if (validateEmail(email)) {
// 			document.getElementById("swal2-validation-message02").classList.add("d-none")
// 			employer_login()
// 		}else{
// 			show_swal_validation_login("Invalid Email address.")
// 		}
// 	}

// }

function validate_emp_login(dir, dir2) {
	var ids = ["login--email", "login-password"];
	var permission;

	var error_empty;
	for (let i = 0; i < ids.length; i++) {
		var value = document.getElementById(ids[i]).value;
		var labels = document.getElementsByTagName('label');
		if (value == "") {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					true_class(labels[x]);
				}
			}
			error_empty = true;
		} else {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					false_class(labels[x]);
				}
			}
		}
	}

	if (error_empty) {
		const swal_id = document.getElementById("swal3-validation-message");
		swal_id.classList.remove("d-none");
		swal_id.innerHTML = "Please input your email and password.";
		//show_swal_validation();
		permission = false;
	} else {
		const swal_id = document.getElementById("swal3-validation-message");
		swal_id.classList.add("d-none");
		document.getElementById("swal3-validation-message").innerHTML = "";
		permission = true;
	}

	if (permission) {
		login_emp(dir, dir2);
		console.log('ready')
	}
}

function validate_jobsubmit() {
	const ids = ['job_title', 'hiddenJobType', 'hiddenPosition', 'job_location', 'hiddenSpecialization', 'salary01', 'salary02', 'requirements', 'qualifications', 'responsibilities', 'job_description']
	const addfields = ['requirements_div', 'qualifications_div', 'responsibilities_div']
	const afld_inputs = ['requirements', 'qualifications', 'responsibilities'];
	const slr1 = document.getElementById('salary01')
	const slr2 = document.getElementById('salary02')
	var permission;

	clear_value(afld_inputs)
	for (let a = 0; a < addfields.length; a++) {
		const rq_div = document.getElementById(addfields[a])
		var inpts = rq_div.getElementsByTagName('input')

		for (let i = 0; i < inpts.length; i++) {
			const dv_id = document.getElementById(afld_inputs[a])
			if (dv_id.value != "") {
				dv_id.value = dv_id.value + '/' + inpts[i].value
			}else{
				dv_id.value = inpts[i].value
			}
		}
	}


	var error_empty;
	for (let i = 0; i < ids.length; i++) {
		var value = document.getElementById(ids[i]).value;
		var labels = document.getElementsByTagName('label');
		if (value == "") {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					true_class(labels[x]);
				}
			}
			error_empty = true;
		} else {
			for (let x = 0; x < labels.length; x++) {
				if (labels[x].htmlFor === ids[i]) {
					false_class(labels[x]);
				}
			}
		}
	}

	if (slr1.value === "" || slr2.value === "") {
		const label = document.getElementById('label_salary')
		true_class(label);
	} else {
		const label = document.getElementById('label_salary')
		false_class(label);
	}

	if (error_empty) {
		show_swal_validation("Make sure to fill up all required fields.")
		permission = false
	} else {
		hide_swal_validation()
		permission = true;
	}

	if (permission) {
		submit_jobpost()
	}
}