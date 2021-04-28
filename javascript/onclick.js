// var checkBoxIDs = ["work--xp", "student--xp"];
// function uncheck(event) {
//     var id = event.target.id;
//     checkBoxIDs.forEach(function (id) {
//         if (id != event.target.id) {
//             document.getElementById(id).checked = false;
//         }
//     })
// }
// jQuery("#work--xp").click(uncheck);
// jQuery("#student--xp").click(uncheck);

function ShowEmpLoginForm(){
    const form_id = document.getElementById('emp-login-form');
    const blur_id = document.getElementById('blur');
    form_id.classList.toggle("visible");
    blur_id.classList.toggle("blur");
}