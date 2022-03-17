document.getElementById("form").addEventListener("submit", function (e) {
    if(!validation())
    e.preventDefault()
})

function validation() {
    let check=true
    let formLabels = document.getElementsByTagName("input");
    let UserName = document.cfrForm.UserName.value;
    if (UserName == "")
    {
        formLabels[0].style.border = "2px solid red";
        check=false
     
    } else if (!isNaN(UserName)) 
    {
        formLabels[0].style.border = "2px solid red";
        check=false
    }
    else 
    {
    formLabels[0].style.border = "2px solid green";
    }
    

    let Email = document.cfrForm.Email.value;
    
    if (Email == "")
    {
        formLabels[1].style.border = "2px solid red";
        check=false

    }
    else 
    {
    formLabels[1].style.border = "2px solid green";
    }

    let password = document.cfrForm.password.value;
    if (password == "") 
    {
        formLabels[2].style.border = "2px solid red";
        check=false

       
    } else if (password.lenght < 6) 
    {
        formLabels[2].style.border = "2px solid red";
        check=false
    }
    else 
    {
    formLabels[2].style.border = "2px solid green";
    }
    
    let C_Password = document.cfrForm.C_Password.value;
    
    if (C_Password == "")
    {
        formLabels[3].style.border = "2px solid red";
       
         check=false
        
    }else if (C_Password != password){
        formLabels[3].style.border = "2px solid red";
       
        check=false
    }
    else 
    {
    formLabels[0].style.border = "2px solid green";
    }
    
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
