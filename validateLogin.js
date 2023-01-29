function validateLogin(form){
    failMsg = validateEmail(form.email.value)
    failMsg += validatePassword(form.password.value)
}

function validateEmail(field){
    if (field == "") return "No email was entered.\n"
    else if (!/[@]/.test(field) || !/[.]/.test(field)) return "Email must contain @ and ."
    else return ""
}


function validatePassword(field){
    if (field =="") return "No Password was entered.\n"
    else if (field.length < 4) return "Passwords must be of at least 5 characters.\n"
    else return ""
}

// We also have to validate that the user email and passwords match the ones in database
