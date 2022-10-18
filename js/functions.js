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