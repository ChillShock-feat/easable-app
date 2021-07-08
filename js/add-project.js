'use strict';
{
    window.onload = () =>{
        let addBtn = document.getElementById('addserver');
        let i = 2;
        let parent = document.getElementById('addserver-parent');

        addBtn.onclick = () =>{
            let serverLabel = document.createElement('label');
            let labelContent = document.createTextNode('サーバー名');
            serverLabel.appendChild(labelContent);
            let newServerData = document.createElement('input');
            newServerData.type = 'text';
            newServerData.id = 'servername-' + i;
            parent.appendChild(serverLabel);
            parent.appendChild(newServerData);
            i++;
        }
    }
}