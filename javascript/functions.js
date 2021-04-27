function changeColor() {
    var ids = ["home", "about", "contacts", "explore", "trace", "web-id", "sign-up-btn"];
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
