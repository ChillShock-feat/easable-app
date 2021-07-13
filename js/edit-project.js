'use strict';
{
    let altBtn = document.getElementsByClassName('altbtn');
    let altContent = document.getElementsByClassName('altcontent');
    let flg = false;

    for (let i = 0; i < altBtn.length; i++) {
        altBtn[i].onclick = () =>{
            if(flg = !flg){
                altContent[i].style.display = 'block';
            }else{
                altContent[i].style.display = 'none';
            }
        }
    }
}