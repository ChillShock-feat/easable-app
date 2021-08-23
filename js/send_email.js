'use strict';
{
    window.onload = () =>{
        let submit = document.getElementById('submit');
        let error = document.getElementById('error');
        console.log(error);
        submit.onclick = () =>{
            if(email_form.email.value == ""){
                error.style.visibility = "visible";
                return false;
            }else{
                return true;
            }
        } 
    }
}