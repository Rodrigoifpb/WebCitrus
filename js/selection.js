class IpTables {

  constructor() {
    this.addresses = []

    this.ipTableContent = document.querySelector('table#iptable tbody')
    this.warningField = document.querySelector('#warning')
    this.addressForm = document.querySelector('form#add-ip')
    this.addressInput = Array.from(this.addressForm.querySelectorAll('input'))

    this.loadAddAddreessEvent(document.querySelector('button'))
  }

  addAddress(address) {
    this.addresses.push(address)
  }

  // View
  render() {
    this.addresses.forEach(address => this.genRowContent(address))
  }

  addRow(address) {

    const url = `./db/lerBanco.php?valor=1`
    const config = {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `ip=${address.ip}&user=${address.user}&pass=${address.pass}`
    }

    fetch(url, config)

  }

  genRowContent(address) {
    const row = `
        <tr data-ip="${address.ip}">
        <td class="ip">${address.ip}</td>
        <td class="user">${address.user}</td>
        <td><button class="btn"><i class="fa fa-trash"></i></button></td>
        <td><a href="index.php" class="btn btn-success btn-lg"></a></td>
      </tr>`
    this.ipTableContent.insertAdjacentHTML('afterbegin', row)
  }

  showAlert(info) {
    this.warningField.innerHTML = `
      <div class="alert alert-warning" role="alert">
        <strong>${info}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>`
  }

  hiddenAlert() {
    this.warningField.innerHTML = ''
  }


  // Events
  loadAddAddreessEvent(addButton) {
    addButton.addEventListener('click', (event) => {
      event.preventDefault()

      const formData = new FormData(this.addressForm)
      const ip = formData.get('ip') || null
      const user = formData.get('user') || null
      const key = formData.get('key') || null
      const address = { ip, user, key }

      this.addressInput.forEach(input => input.value = '')

      const url = `./db/lerBanco.php?valor=4&ipid=${ip}`
      fetch(url)
        .then(res => res.json())
        .then(json => {
          if (json === false) {
            if (ip === null || ip === null) {
              this.showAlert('Informe os campos obrigatórios')
            } else {
              console.log(json)
              this.addRow(address)
              addButton.blur()
              window.location.reload()
            }
          } else {
            this.showAlert('O IP informado já está cadastrado')
          }
        })
    })
  }


}

const iptables = new IpTables()


const tabela = document.querySelector('#iptable tbody')


const url = `./db/lerBanco.php?valor=2`
fetch(url)
  .then(res => res.json())
  .then(json => fillTable(json))


function fillTable(ether) {
  for (let x of ether) {
    const valor = `
        <tr>
           <td>${x.ip}</td>
           <td>${x.user}</td>
           <td><button id="remover-${x.id}" class="btn" onClick="window.location.reload()"><i class="fa fa-trash"></i></button></td>
           <td><a href="index.php?ip=${x.ip}" class="btn btn-success btn-lg"></a></td>
        </tr>
        `
    tabela.insertAdjacentHTML('beforeend', valor)
    const button = tabela.querySelector(`#remover-${x.id}`)
    button.addEventListener('click', function (event) {

      const url = `./db/lerBanco.php?valor=3`
      const config = {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `id=${x.id}`
      }

      fetch(url, config)
    })
  }

}