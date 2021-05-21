var checked = [];
function getBoxes() {
    checked = [];
    var box_ids = ["Unemployed", "Self-Employed", "Employed", "BS Computer Science", "BS Information Technology", "BS Library and Information Science", "Diploma in Computer Technology"];;
    for (let i = 0; i < box_ids.length; i++) {
        var nospace = box_ids[i].split(" ").join("");
        var box = document.getElementById(nospace);
        if (box.checked) {
            checked.push(nospace);
        } else {
            removeFilter("selected" + nospace);
        }
    }
    addFilter();
}

function addFilter() {
    for (let i = 0; i < checked.length; i++) {
        document.getElementById('selected' + checked[i]).classList.add('active');
    }
}

function removeFilter(button_id) {
    document.getElementById(button_id).classList.remove("active");
}

function cloneSelected() {
    const filter = ["Self-Employed", "Employed", "BS Computer Science", "BS Information Technology", "BS Library and Information Science", "Diploma in Computer Technology"];
    for (var i = 0; i < filter.length; i++) {
        const filter_id = document.getElementById("selectedUnemployed");
        var divclone = filter_id.cloneNode(true);
        divclone.id = "selected" + filter[i].split(" ").join("");
        var child = divclone.children;
        child[0].innerHTML = filter[i];
        var parentcon = document.getElementById("selectedFilterContainer");
        parentcon.appendChild(divclone);
    }
}

function cloneFilter() {
    const filter = ["Self-Employed", "Employed", "BS Computer Science", "BS Information Technology", "BS Library and Information Science", "Diploma in Computer Technology"];
    for (var i = 0; i < filter.length; i++) {
        const form_id = document.getElementById("form-check");
        var divclone = form_id.cloneNode(true);
        var child = divclone.children;
        var filterNospace = filter[i].split(" ").join("");
        child[0].id = filterNospace;
        child[1].innerHTML = filter[i];
        child[1].setAttribute("for", filterNospace);
        var parentcon = document.getElementById("filter-content");
        parentcon.appendChild(divclone);
    }
}

function setFilter() {
    document.getElementById('filter-list-card').classList.toggle('active');
}