function changeColor() {
  var ids = [
    "home",
    "about",
    "contacts",
    "explore",
    "trace",
    "web-id",
    "signup-btn",
    "login-btn",
    "logsign-container",
  ];
  for (var i = 0; i < ids.length; i++) {
    var select = document.getElementById(ids[i]);
    select.classList.add("color-black");
    select.classList.remove("color-white");
  }
}

function loadPage() {
  document.onreadystatechange = function () {
    if (document.readyState !== "complete") {
      document.querySelector("#spinner-wrapper").classList.remove("hide");
    } else {
      document.querySelector("#spinner-wrapper").classList.add("hide");
    }
  };
}

function workCheckBox() {
  const checkBoxIDs = ["work--xp", "student--xp"];
  function uncheck(event) {
    var id = event.target.id;
    checkBoxIDs.forEach(function (id) {
      if (id != event.target.id) {
        document.getElementById(id).checked = false;
      }
    });
  }
  jQuery("#work--xp").click(uncheck);
  jQuery("#student--xp").click(uncheck);
}

function sexCheckBox() {
  const checkBoxIDs = ["male_checkbox", "female_checkbox"];
  function uncheck(event) {
    var id = event.target.id;
    checkBoxIDs.forEach(function (id) {
      if (id != event.target.id) {
        document.getElementById(id).checked = false;
      }
    });
  }
  jQuery("#male_checkbox").click(uncheck);
  jQuery("#female_checkbox").click(uncheck);
}

function residenceCheckBox() {
  const checkBoxIDs = ["urban_checkbox", "rural_checkbox"];
  function uncheck(event) {
    var id = event.target.id;
    checkBoxIDs.forEach(function (id) {
      if (id != event.target.id) {
        document.getElementById(id).checked = false;
      }
    });
  }
  jQuery("#urban_checkbox").click(uncheck);
  jQuery("#rural_checkbox").click(uncheck);
}

function employment_fieldCheckBox() {
  const checkBoxIDs = ["government_checkbox", "private_checkbox"];
  function uncheck(event) {
    var id = event.target.id;
    checkBoxIDs.forEach(function (id) {
      if (id != event.target.id) {
        document.getElementById(id).checked = false;
      }
    });
  }
  jQuery("#government_checkbox").click(uncheck);
  jQuery("#private_checkbox").click(uncheck);
}

function ict_relatedCheckBox() {
  const checkBoxIDs = ["ictyes_checkbox", "ictno_checkbox"];
  function uncheck(event) {
    var id = event.target.id;
    checkBoxIDs.forEach(function (id) {
      if (id != event.target.id) {
        document.getElementById(id).checked = false;
      }
    });
  }
  jQuery("#ictyes_checkbox").click(uncheck);
  jQuery("#ictno_checkbox").click(uncheck);
}

function civilstatusCheckBox() {
  const checkBoxIDs = [
    "single_checkbox",
    "married_checkbox",
    "separated_checkbox",
    "widowed_checkbox",
  ];
  function uncheck(event) {
    var id = event.target.id;
    checkBoxIDs.forEach(function (id) {
      if (id != event.target.id) {
        document.getElementById(id).checked = false;
      }
    });
  }
  jQuery("#single_checkbox").click(uncheck);
  jQuery("#married_checkbox").click(uncheck);
  jQuery("#separated_checkbox").click(uncheck);
  jQuery("#widowed_checkbox").click(uncheck);
}

function employment_statusCheckBox() {
  const checkBoxIDs = [
    "permanent_checkbox",
    "temporary_checkbox",
    "contractual_checkbox",
    "casual_checkbox",
  ];
  function uncheck(event) {
    var id = event.target.id;
    checkBoxIDs.forEach(function (id) {
      if (id != event.target.id) {
        document.getElementById(id).checked = false;
      }
    });
  }
  jQuery("#permanent_checkbox").click(uncheck);
  jQuery("#temporary_checkbox").click(uncheck);
  jQuery("#contractual_checkbox").click(uncheck);
  jQuery("#casual_checkbox").click(uncheck);
}

function employment_lengthCheckBox() {
  const checkBoxIDs = [
    "day0006_checkbox",
    "day0712_checkbox",
    "day1318_checkbox",
    "day1924_checkbox",
    "day24above_checkbox",
  ];
  function uncheck(event) {
    var id = event.target.id;
    checkBoxIDs.forEach(function (id) {
      if (id != event.target.id) {
        document.getElementById(id).checked = false;
      }
    });
  }
  jQuery("#day0006_checkbox").click(uncheck);
  jQuery("#day0712_checkbox").click(uncheck);
  jQuery("#day1318_checkbox").click(uncheck);
  jQuery("#day1924_checkbox").click(uncheck);
  jQuery("#day24above_checkbox").click(uncheck);
}

function employmentCheckBox() {
  const checkBoxIDs = [
    "employed_checkbox",
    "self-employed_checkbox",
    "unemployed_checkbox",
    "exp-unemployed_checkbox",
  ];
  function uncheck(event) {
    var id = event.target.id;
    checkBoxIDs.forEach(function (id) {
      if (id != event.target.id) {
        document.getElementById(id).checked = false;
      }
    });
  }
  jQuery("#employed_checkbox").click(uncheck);
  jQuery("#self-employed_checkbox").click(uncheck);
  jQuery("#unemployed_checkbox").click(uncheck);
  jQuery("#exp-unemployed_checkbox").click(uncheck);
}

function salaryCheckBox() {
  const checkBoxIDs = [
    "php1_checkbox",
    "php2_checkbox",
    "php3_checkbox",
    "php4_checkbox",
  ];
  function uncheck(event) {
    var id = event.target.id;
    checkBoxIDs.forEach(function (id) {
      if (id != event.target.id) {
        document.getElementById(id).checked = false;
      }
    });
  }
  jQuery("#php1_checkbox").click(uncheck);
  jQuery("#php2_checkbox").click(uncheck);
  jQuery("#php3_checkbox").click(uncheck);
  jQuery("#php4_checkbox").click(uncheck);
}

function changeLink() {
  const ids = [
    "mypage-link",
    "jobs-link",
    "employer-prof-link",
    "alumni-link",
    "forum-link",
    "job-app-link",
    "bookmarks-link",
    "emp-btn-link",
  ];
  const c = "Candidate",
    j = "Jobs",
    e = "Employers",
    a = "Alumni",
    f = "Forum";
  const link = [
    c + "/candidate.php",
    j + "/jobs.php",
    e + "/employers-profile-page.php",
    a + "/alumni-index.php",
    f + "/forum-index.php",
    c + "/job-applications.php",
    c + "/bookmarks.php",
    e + "/employer-page.php",
  ];
  for (let i = 0; i < ids.length; i++) {
    document.getElementById(ids[i]).href = link[i];
  }
}

function changeLink_inner() {
  const ids = [
    "mypage-link",
    "jobs-link",
    "employer-prof-link",
    "alumni-link",
    "forum-link",
    "job-app-link",
    "bookmarks-link",
    "emp-btn-link",
  ];
  const c = "../Candidate",
    j = "../Jobs",
    e = "../Employers",
    a = "../Alumni",
    f = "../Forum";
  const link = [
    c + "/candidate.php",
    j + "/jobs.php",
    e + "/employers-profile-page.php",
    a + "/alumni-index.php",
    f + "/forum-index.php",
    c + "/job-applications.php",
    c + "/bookmarks.php",
    e + "/employer-page.php",
  ];
  for (let i = 0; i < ids.length; i++) {
    document.getElementById(ids[i]).href = link[i];
  }
}

function GetTextList() {
  fetch("textFile/field.txt")
    .then((response) => response.text())
    .then((data) => {
      var array = data.split("\n");
      for (let i = 0; i < array.length; i++) {
        const li__id = document.getElementById("AdvertisingMedia");
        var clone = li__id.cloneNode(true);
        clone.id = array[i].split(" ").join("");
        clone.innerHTML = array[i];
        const parentContainer = document.getElementById("list__ul");
        parentContainer.appendChild(clone);
      }
    });
}

function GetPositionList() {
  fetch("textFile/position-levels.txt")
    .then((response) => response.text())
    .then((data) => {
      var array = data.split("\n");
      for (let i = 0; i < array.length; i++) {
        const li__id = document.getElementById("CEO/SVP/AVP/VP/Director");
        var clone = li__id.cloneNode(true);
        clone.id = array[i].split(" ").join("");
        clone.innerHTML = array[i];
        const parentContainer = document.getElementById("list__ul__Position");
        parentContainer.appendChild(clone);
      }
    });
}

function GetSpecializationList() {
  fetch("textFile/specialization.txt")
    .then((response) => response.text())
    .then((data) => {
      var array = data.split("\n");
      for (let i = 0; i < array.length; i++) {
        const li__id = document.getElementById("ActuarialScience/Statistic");
        var clone = li__id.cloneNode(true);
        clone.id = array[i].split(" ").join("");
        clone.innerHTML = array[i];
        const parentContainer = document.getElementById(
          "list__ul__Specialization"
        );
        parentContainer.appendChild(clone);
      }
    });
}

function GetSpecializationList_inner() {
  fetch("../textFile/specialization.txt")
    .then((response) => response.text())
    .then((data) => {
      var array = data.split("\n");
      for (let i = 0; i < array.length; i++) {
        const li__id = document.getElementById("ActuarialScience/Statistic");
        var clone = li__id.cloneNode(true);
        clone.id = array[i].split(" ").join("");
        clone.innerHTML = array[i];
        const parentContainer = document.getElementById(
          "list__ul__Specialization"
        );
        parentContainer.appendChild(clone);
      }
    });
}

function GetIndustryList() {
  fetch("textFile/industry.txt")
    .then((response) => response.text())
    .then((data) => {
      var array = data.split("\n");
      for (let i = 0; i < array.length; i++) {
        const li__id = document.getElementById("Accounting/Audit/TaxServices");
        var clone = li__id.cloneNode(true);
        clone.id = array[i].split(" ").join("");
        clone.innerHTML = array[i];
        const parentContainer = document.getElementById("list__ul__Industry");
        parentContainer.appendChild(clone);
      }
    });
}

function GetYearList() {
  for (let i = 2029; i > 1961; i--) {
    const li__id = document.getElementById("2030");
    var clone = li__id.cloneNode(true);
    clone.id = [i];
    clone.innerHTML = i;
    const parentContainer = document.getElementById("list__ul__Year");
    parentContainer.appendChild(clone);
  }
}

function showPositionList() {
  document.getElementById("optionsPosition").classList.toggle("active");
}

function showIndustryList() {
  document.getElementById("optionsIndustry").classList.toggle("active");
}

function showSpecializationList() {
  document.getElementById("optionsSpecialization").classList.toggle("active");
}

function showList() {
  document.getElementById("options").classList.toggle("active");
}

function showYearList() {
  document.getElementById("optionsYear").classList.toggle("active");
}

function showCourseList() {
  document.getElementById("optionsCourse").classList.toggle("active");
}

function showjobTypeList() {
  document.getElementById("optionsJobType").classList.toggle("active");
}

function CourseSelect(course_id) {
  const inner = document.getElementById(course_id).innerHTML;
  document.getElementById("control-selected-course").innerHTML = inner;
  document.getElementById("hiddenCourse").value = inner;
  console.log("Course:" + " " + inner);
  showCourseList();
}

function showDegreeList() {
  document.getElementById("optionsDegree").classList.toggle("active");
}

function DegreeSelect(degree_id) {
  const inner = document.getElementById(degree_id).innerHTML;
  document.getElementById("control-selected-degree").innerHTML = inner;
  document.getElementById("degree_earned").value = inner;
  console.log("Degree Earned:" + " " + inner);
  showDegreeList();
}

function YearSelect(year_id) {
  const inner = document.getElementById(year_id).innerHTML;
  document.getElementById("control-selected-year").innerHTML = inner;
  document.getElementById("graduation_year").value = inner;
  console.log("Graduation Year:" + " " + inner);
  showYearList();
}

function optionSelect(option_id) {
  const inner = document.getElementById(option_id).innerHTML;
  document.getElementById("control-selected-field").innerHTML = inner;
  document.getElementById("hiddenField").value = inner;
  console.log("Field of Study:" + " " + inner);
  showList();
}

function position_select(position_ID) {
  const inner = document.getElementById(position_ID).innerHTML;
  document.getElementById("level-input").innerHTML = inner;
  document.getElementById("hiddenPosition").value = inner;
  console.log("Position Level:" + " " + inner);
  showPositionList();
}

function jobType_select(type_id){
  const inner = document.getElementById(type_id).innerHTML;
  document.getElementById("job-type").innerHTML = inner;
  document.getElementById("hiddenJobType").value = inner;
  console.log("Job Type:" + " " + inner);
  showjobTypeList()
}

function specialization_select(specialization_ID) {
  const inner = document.getElementById(specialization_ID).innerHTML;
  document.getElementById("specialization-input").innerHTML = inner;
  document.getElementById("hiddenSpecialization").value = inner;
  console.log("Specialization:" + " " + inner);
  showSpecializationList();
}

function industry_select(industry_ID) {
  const inner = document.getElementById(industry_ID).innerHTML;
  document.getElementById("industry-input").innerHTML = inner;
  document.getElementById("hiddenIndustry").value = inner;
  console.log("Industry:" + " " + inner);
  showIndustryList();
}

function erase_input() {
  document.getElementById("hiddenIndustry").value = "";
  document.getElementById("hiddenSpecialization").value = "";
  document.getElementById("hiddenPosition").value = "";
}

function show_alert(icon, title, text, button, location) {
  Swal.fire({
    icon: icon,
    title: title,
    text: text,
    customClass: {
      popup: "me-17px swal-width-400 font-poppins",
      title: "color-black font-700 fontsize-24",
      htmlContainer: "color-light pt-0 fontsize-13",
      confirmButton: "btn bg-cp2 bg-cp2h px-5",
    },
    confirmButtonText: button,
  }).then(function () {
    if (location != "") {
      window.location = location;
    }else{
      return false
    }
  });
}

function show_alert_options(title, text, icon, cancel, confirmbtn_text, confirmed_title, confirmed_text, confirmed_icon) {
  Swal.fire({
    title: title,
    text: text,
    icon: icon,
    showCancelButton: cancel,
    confirmButtonColor: '#0d6efd',
    cancelButtonColor: '#d33',
    confirmButtonText: confirmbtn_text,
    customClass: {
      popup: "me-17px swal-width-400 font-poppins",
      title: "color-black font-700 fontsize-24",
      htmlContainer: "color-light pt-0 fontsize-13",
      confirmButton: "btn bg-cp2 bg-cp2h px-2 fontsize-13 font-500",
      cancelButton: "btn px-2 fontsize-13 font-500" 
    }
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: confirmed_title,
        text: confirmed_text,
        icon: confirmed_icon,
        customClass: {
        popup: "me-17px swal-width-400 font-poppins",
        title: "color-black font-700 fontsize-24",
        htmlContainer: "color-light pt-0 fontsize-13",
        confirmButton: "btn bg-cp2 bg-cp2h px-5 fontsize-13 font-500"
        }
      })
    }
  })
}

function show_toast_swal() {
  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 5000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener("mouseenter", Swal.stopTimer);
      toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
  });

  Toast.fire({
    icon: "warning",
    title: "You must login first.",
  });
}

function readUpload(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#user_profile_upload").attr("src", e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

function done() {
  const icon = "success";
  const title = "Information Saved!";
  const text = "Your information has been saved. Thank you for filling up the form.";
  const button = "Continue";
  const location = "Candidate/candidate.php";
  show_alert(icon, title, text, button, location);
}

function show_option(btn_id){
  const option_id = 'application_option0' + btn_id;
  document.getElementById(option_id).classList.toggle('active')
}

function toggle_dropdown_notification() {
  document.getElementById('web_notification_dropdown').classList.toggle('active');
}

function readUpload02(input, _id) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $(_id).attr("src", e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}