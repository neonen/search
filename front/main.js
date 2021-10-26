var el = document.querySelector("#app");

var dados = [];

function template(){
    return `
        <ul>
            ${dados.map(function(dado){
                return `<li>
                            ${dado.title} <br/> 
                            [<a href="${dado.link}" target="_blank">${dado.link}</a>]
                        </li>`
            }).join('')}
        </ul>
    `;
}

function pesquisar(){
    let valor = document.querySelector("#q").value;

    fetch(`http://localhost:8000?q=${valor}`)
        .then(response => {
            response.json()
                .then(res => {
                    console.log(res)
                    dados = res;
                    el.innerHTML = template();
                })
        })
}