
const errorMessage$ = document.getElementById('errorMessage')
const sendStatus$ = document.getElementById('send-status')
const send$ = document.getElementById('send')

$('#formButton').click((e) => {
	e.preventDefault();
	sendStatus$.classList.remove('d-none');
	send$.classList.add('d-none');

	const nombre = document.getElementById('nombre').value;
	const email = document.getElementById('email').value;
	const movil = document.getElementById('movil').value;
	const mensaje = document.getElementById('mensaje').value;

	const isFormValid = nombre && email && movil && mensaje;

	if (!isFormValid) {
		errorMessage$.classList.remove('d-none');

		sendStatus$.classList.add('d-none');
		send$.classList.remove('d-none');
		return;
	}

	errorMessage$.classList.add('d-none');

	const data = {
		nombre,
		email,
		movil,
		mensaje,
	}

	console.log(data);

	$.post('/mailer/main.php', JSON.stringify(data))
	.done(data => {
    	const response = JSON.parse(data);
    	if (data.status) {
    		alert('Correo enviado exitosamente')
    	} else {
    		alert('El correo no se ha podido enviar, intente mas tarde');
    	}

    	sendStatus$.classList.add('d-none');
		send$.classList.remove('d-none');
    })
    .fail(() => {
    	alert('El correo no se ha podido enviar, intente mas tarde');
	    sendStatus$.classList.add('d-none');
		send$.classList.remove('d-none');
	})	
})