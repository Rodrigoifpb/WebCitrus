const table = document.querySelector('#myTabConten')
// const ip = document.querySelectorAll("#ip").value
// const user = document.querySelectorAll('#user').value
// const key = document.querySelectorAll('#key').value
const ip = "192.168.1.27"
const user = "root"
const key = "12345"

console.log(ip)
console.log(user)
console.log(key)
console.log("teste 0")


const url = `./back/comandos.php?valor=1&ip=${ip}&user=${user}&key=${key}`
//const url = `./back/comandos.php`
fetch(url)
    .then(res => res.json())
    .then(json => fillTable(json))

function fillTable(message) {
    
    console.log("teste 1")
    const view =` 
        <tr>
            <th scope="row">Serviço:</th>
            <td>${message[1].servico}</td>
        <tr>
        <tr>
            <th scope="row">Porta:</th>
            <td>${message[1].porta}</td>
        </tr>
     `        
    table.insertAdjacentHTML('beforeend', view)
    console.log("teste 2")
}