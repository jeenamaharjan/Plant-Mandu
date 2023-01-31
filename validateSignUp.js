function validateSignUp(form){
    failMsg = validateEmail(form.email.value)
    failMsg += validatePassword(form.password.value)
    failMsg = validatePhone(form.phone.value)
    failMsg = validateAge(form.age.value)
    failMsg = validateGender(form.gender.value)
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

function validateAge(field){
    if (field =="") return "No age was entered.\n"
    else if (isNaN(field)||field<1||field>100)
    { 
        alert("The age must be a number between 1 and 100");
        return false;
    }
    else return ""
}

  
function validatePhone(field)
{
    var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
    if (field =="") return "No phone number was entered.\n"
    else if(field.value.match(phoneno)){
        return "";
    }
    else
    {
    alert("Enter valid phone number");
    
    }
}

