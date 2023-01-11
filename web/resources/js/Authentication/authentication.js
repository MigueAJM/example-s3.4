const btn_to_login = document.getElementById('btn_to_login')

btn_to_login.addEventListener('click', () => {
    const elements = document.querySelectorAll(`#formulario input`)
    const data = {}
    elements.forEach(element => {
        data[element.name] = element.value
    });
    fetch(path_to_login, {
        method: 'post',
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(res => res.json())
    .then(data => {
        console.log(data)
        if(!data.status)
            document.body.append(data.error || 'Error en el servidor.')
    })
    .catch(error => console.error(error))
})