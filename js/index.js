'use strict';
{
    window.onload = () =>{
        let toggleBtn = document.getElementsByClassName('nav-toggle');
        let showList = document.getElementsByClassName('show-list');
        let rotateTriangle = document.getElementsByClassName('rotate-triangle');
        let flg = false;

        for (let i = 0; i < toggleBtn.length; i++) {
            toggleBtn[i].onclick = () =>{
                if(flg = !flg){
                    toggleBtn[i].classList.add('nav__project__openlist');
                    rotateTriangle[i].classList.add('nav__project__toggleimg');
                    showList[i].classList.add('nav__project__openserver');
                }else{
                    toggleBtn[i].classList.remove('nav__project__openlist');
                    rotateTriangle[i].classList.remove('nav__project__toggleimg');
                    rotateTriangle[i].style.transition = ".3s";
                    showList[i].classList.remove('nav__project__openserver');
                }
            }
        }
    }
}