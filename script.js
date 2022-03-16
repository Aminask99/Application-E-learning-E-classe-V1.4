document.getElementById("form").addEventListener("submit", function (e) {
    if(!validation())
    e.preventDefault()
})

function validation() {
    let check=true
    let formLabels = document.getElementsByTagName("input");
    let UserName = document.cfrForm.UserName.value;
    if (UserName == "") {
        formLabels[0].style.border = "2px solid green";
        check=false
        // e.preventDefault()
    } else if (!isNaN(UserName)) {
        formLabels[0].style.border = "2px solid green";
        check=false

        // e.preventDefault()
    }
    // else{
    //     formLabels[0].style.border = "";
    // }
    let Email = document.cfrForm.Email.value;
    if (Email == "") {
        formLabels[1].style.border = "2px solid green";
        check=false

        // e.preventDefault()
    } else if (!isNaN(Email)) {
        formLabels[1].style.border = "2px solid green";
        check=false

        // e.preventDefault()
    }
    let password = document.cfrForm.password.value;
    if (password == "") {
        formLabels[2].style.border = "2px solid green";
        check=false

        // e.preventDefault()
    }
    // else if (!isNaN(Email)){
    //     formLabels[2].style.border="2px solid red";
    //     valid = false
    //     // e.preventDefault()
    // }

    // e.preventDefault()
    let C_Password = document.cfrForm.C_Password.value;
    if (C_Password == "") {
        formLabels[3].style.border = "2px solid green";
        check=false

        // e.preventDefault()
    }
    // else if (!isNaN(C_Password)){
    //     formLabels[3].style.border="2px solid red";
    //     valid = false
    //     // e.preventDefault()
    // }


    return check

}
function modells()
{
        document.getElementById("model_parent").style.display = "block";
        document.getElementById("model_parent").style.display = "flex";
}
function close_()
{
        document.getElementById("model_parent").style.display = "none";
     
}
