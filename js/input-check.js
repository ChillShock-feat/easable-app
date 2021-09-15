'use strict'
{
    window.onload = () =>{
        
        let serverInput = document.getElementById('servername-1');

        // let serverDatas = [
        //     'server',
        //     'web'
        // ]
        console.log(alertData);

        // alert(alertData);


        // const getServerName = async ((project_id)=>{
        //     const res = await fetch(`https://www.easable.jp/easable-app/.php?project_id=${project_id}`);
        //     const data = await JSON.parse(res);
        //     return data;
        // });

        // getServerName(project_id).then((res)=>{
        //     const servers = res.data;
        //     const flag = servers.find((server)=>server === '');
        //     if(flag === 'undefined'){
        //         console.log(`定義されていません`);
        //     }else{
        //         console.log(`存在しています`);
        //     }
        // }).catch((error)=>{
        
        // })

        // serverInput.on('keyDown') = () =>{
        //     console.log('入力されました');
        //     // const flag = serverDatas.find((server)=>server === serverInput.value);
        //     // if(flag === 'undefined'){
        //     //     console.log(`定義されていません`);
        //     // }else{
        //     //     console.log(`存在しています`);
        //     // }
        // }
        serverInput.addEventListener('keyup',(event)=>{
            console.log(event.target.value);
            let flag = serverDatas.find((server)=> server === serverInput.value);
            if(flag){
                console.log('すでに登録されています')
            }else{
                console.log('すでに登録されていません')
            }
        })
    }
}
// const getServerName = async ((project_id)=>{
//     const res = await fetch(`https://www.easable.jp/easable-app/.php?project_id=${project_id}`);
//     const data = await JSON.parse(res);
//     return data;
// });
