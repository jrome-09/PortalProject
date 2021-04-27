var checkBoxIDs = ["work--xp", "student--xp"];
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