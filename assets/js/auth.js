let form = document.getElementById('login-form');

if (form !== null) {
	let errorBox = document.querySelector('.err');

	form.addEventListener('submit', function(e) {
		e.preventDefault();

		let formData = new FormData(form);
		fetch('', {
			method: 'POST',
			body: formData
		})
		.then(response => response.json())
		.then(data => {
			errorBox.innerHTML = '';
			if(data.res) {
				window.location.href = data.currentUrl;
			}
			else {
				for (i=0; i<data.err.length; i++) {
					errorBox.innerHTML += '<p>' + data.err[i] + '</p>';
				}
			}
		})
		.catch(error => {
			console.error('Ошибка:', error);
			errorBox.innerHTML = '<p>Произошла ошибка при отправке формы.</p>';
		});
	});
}