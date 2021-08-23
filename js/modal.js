'use strict';
{
    let modal = document.getElementById('modal');
    let showModal = document.getElementById('show_modal');
    let removeModal = document.getElementById('remove_modal');

    showModal.onclick = () =>{
        modal.style.display = 'flex';
    }
    removeModal.onclick = () =>{
        modal.style.display = 'none';
    }
}