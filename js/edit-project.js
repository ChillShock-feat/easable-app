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

    let modal = document.getElementById('modal');
    let showModal = document.getElementsByClassName('show_modal');
    let removeModal = document.getElementById('remove_modal');

    for (let n = 0; n < showModal.length; n++) {
        showModal[n].onclick = () =>{
            if(flg = !flg){
                modal.style.display = 'flex';
            }
        }
        removeModal.onclick = () =>{
            modal.style.display = 'none';
        }
    }
}