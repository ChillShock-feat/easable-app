'use strict';
{
    window.onload = () =>{
        // navClickActive
        let contentBtn = document.getElementsByClassName('change-content');
        let showContent = document.getElementsByClassName('show-content');
        let aaa;
        
        for (let i = 0; i < contentBtn.length; i++) {
            let element = contentBtn[i];
            contentBtn[0].classList.add('database__navarea__nav__active');
            showContent[0].style.display = 'block';

            contentBtn[i].classList.remove('database__navarea__nav__active');

            console.log(i);
            contentBtn[i].onclick = () =>{
                // contentBtn[i].classList.remove('database__navarea__nav__active');
                contentBtn[i].classList.add('database__navarea__nav__active');
                showContent[i].style.display = 'block';
                console.log(i)
            }
        }
    }
}