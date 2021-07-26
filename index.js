const root = document.getElementById("root");
const rootDiv = document.createElement("div");

async function main() {
    const url = `https://www.easable.jp/easable-app/api_call_post.php`;
    const req = await fetch(url, {
        method: 'GET',
        mode: 'cors',
    });
    const result = await req.json();
    return result;
}

main().then((result) => {
    try {
        result.data.map((user) => {
            let rootText = document.createTextNode(user.id);
            rootDiv.appendChild(rootText);
            root.appendChild(rootDiv)
        });
    } catch (error) {
        
    }
})
