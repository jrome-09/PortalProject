function changeColor() {
    var ids = ["home", "about", "contacts", "explore", "trace", "web-id", "signup-btn", "login-btn", "logsign-container"];
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
    }
}

function workCheckBox() {
    const checkBoxIDs = ["work--xp", "student--xp"];
    function uncheck(event) {
        var id = event.target.id;
        checkBoxIDs.forEach(function (id) {
            if (id != event.target.id) {
                document.getElementById(id).checked = false;
            }
        })
    }
    jQuery("#work--xp").click(uncheck);
    jQuery("#student--xp").click(uncheck);
}

function changeLink() {
    const ids = ['mypage-link', 'jobs-link', 'employer-prof-link', 'alumni-link', 'forum-link', 'job-app-link', 'bookmarks-link', 'emp-btn-link'];
    const c = "Candidate", j = "Jobs", e = "Employers", a = "Alumni", f = "Forum";
    const link = [c + '/candidate.php', j + '/jobs.php', c + '/employer-profile-page.php', a + '/alumni-index.php', f + '/forum-index.php', c + '/job-applications.php', c + '/booksmarks.php', e + '/employer-page.php'];
    for (let i = 0; i < ids.length; i++) {
        document.getElementById(ids[i]).href = link[i];
    }
}

function GetTextList() {
    fetch('textFile/specialization.txt')
        .then(response => response.text())
        .then(data => {
            var array = data.split("\n");
            for (let i = 0; i < array.length; i++) {
                const li__id = document.getElementById("AdvertisingMedia");
                var clone = li__id.cloneNode(true);
                clone.id = array[i].split(" ").join("");
                clone.innerHTML = array[i];
                const parentContainer = document.getElementById('list__ul');
                parentContainer.appendChild(clone);
            }
        });
}

function showList() {
    document.getElementById('options').classList.toggle('active');
}

function optionSelect(option_id) {
    const inner = document.getElementById(option_id).innerHTML;
    document.getElementById('control-selected').innerHTML = inner;
    document.getElementById('hiddenField').value = inner;
    console.log(inner);
    showList();
}