let form = document.querySelector('.appForm');
let errorBox = document.querySelector('.err');

form.addEventListener('submit', function(e) {
	e.preventDefault();

	let formData = new FormData(form);
	fetch("add", {
		method: 'POST',
		body: formData
	})
	.then(response => response.json())
	.then(data => {
		errorBox.innerHTML = '';
		if(data.res) {
			window.location.href = data.lastInsertId;
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

const dateElement = document.getElementById('date');
const timeElement = document.getElementById('time');
if (dateElement && timeElement) {
	dateElement.valueAsDate = new Date();
	timeElement.value = new Date().toLocaleTimeString('ru-RU', { hour12: false, hour: '2-digit', minute: '2-digit', second: '2-digit'});
}