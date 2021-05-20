function activarActividad() {
    document.getElementById("divActividad").hidden = false;
    document.getElementById("divAtractivo").hidden = true;

}

function activarAtractivo() {
    document.getElementById("divActividad").hidden = true;
    document.getElementById("divAtractivo").hidden = false;
}