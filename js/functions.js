function fillingAlert(inputId, labelId = null) {
    if (document.querySelector(inputId).value == "") {
        if (labelId != null)
            document.querySelector(labelId).classList.add("label-alert");
        document.querySelector(inputId).classList.add("input-alert");
    } else {
        if (labelId != null)
            document.querySelector(labelId).classList.remove("label-alert");
        document.querySelector(inputId).classList.remove("input-alert");
    }
}

function escondeSenha(closeId, openId, inputId) {
    $(openId).removeClass("d-block");
    $(openId).addClass("d-none");
    $(closeId).removeClass("d-none");
    $(closeId).addClass("d-block");
    $(inputId).attr("type", "password");
}

function mostraSenha(closeId, openId, inputId) {
    $(closeId).removeClass("d-block");
    $(closeId).addClass("d-none");
    $(openId).removeClass("d-none");
    $(openId).addClass("d-block");
    $(inputId).attr("type", "text");
}