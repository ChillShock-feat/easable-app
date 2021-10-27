'use strict';
{
    window.onload = () => {
        // navClickActive
        let contentBtn = document.getElementsByClassName('change-content');
        let showContent = document.getElementsByClassName('show-content');
        let num = 0;

        for (let i = 0; i < contentBtn.length; i++) {
            let element = contentBtn[i];
            contentBtn[0].classList.add('database__navarea__nav__active');
            showContent[1].style.display = 'none';
            showContent[2].style.display = 'none';
            contentBtn[i].classList.remove('database__navarea__nav__active');

            console.log(i);
            contentBtn[i].onclick = () => {
                contentBtn[num].classList.remove('database__navarea__nav__active');
                contentBtn[i].classList.add('database__navarea__nav__active');
                showContent[num].style.display = 'none';
                showContent[i].style.display = 'block';
                num = i;
            }
        }
    }
}