const form = document.querySelector('#form-search')
const codigo = document.querySelector('#codigo')
const result = document.querySelector('.result')
const info = document.querySelector('.info')

form.addEventListener('submit', async (e) => {
	e.preventDefault()

	if (codigo.value === '') {
		info.innerText = 'complete el formulario'
		result.classList.add('active')
	} else {
		const formData = new FormData(form)
		const response = await fetch('./search.php', {
			method: 'POST',
			body: formData,
		})
		const data = await response.json()

		// revisa la consola, alli veras todos los datos
		console.log(data)
		info.innerText = data[0].name
		result.classList.add('active')
	}
})
