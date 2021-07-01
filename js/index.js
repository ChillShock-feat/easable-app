'use strict';
{
    window.onload = () =>{

        // navToggle
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


        // navClickActive
        let contentBtn = document.getElementsByClassName('change-content');
        let showContent = document.getElementsByClassName('show-content');
        
        for (let i = 0; i < contentBtn.length; i++) {
            let element = contentBtn[i];
            contentBtn[0].classList.add('database__navarea__nav__active');
            showContent[0].style.display = 'block';

            // function contentDelete(){
            //     contentBtn[i].classList.remove('database__navarea__nav__active');
            //     showContent[i].style.display = 'none';
            //     console.log(contentBtn[i], showContent[i])
            // }

            contentBtn[i].classList.remove('database__navarea__nav__active');
            showContent[i].style.display = 'none';
            console.log(contentBtn[i], showContent[i]);

            contentBtn[i].onclick = () =>{
                contentBtn[i].classList.add('database__navarea__nav__active');
                showContent[i].style.display = 'block';
            }
        }
    }
}