function sendDate() {
	let dateLogs = document.getElementById('dateLogs').value;

	fetch(`${dateLogs}`, {
		headers: {
			'X-Requested-With': 'XMLHttpRequest' // Указываем, что это AJAX-запрос
		}
	})
	.then((response) => {
		return response.text(); // Получаем HTML-ответ
	})
	.then((data) => {
		document.getElementById('logs').innerHTML = data; // Вставляем HTML в контейнер
		// Обновляем URL в адресной строке
        history.pushState(null, '', `${dateLogs}`);
	})
	.catch(error => {
		console.error('Ошибка:', error);
		document.getElementById('logs').innerHTML = '<p>Произошла ошибка при отправке формы.</p>';
	});
}

date = document.getElementById('date').value;
if (date == '') {
	// Устанавливаем текущую дату в поле выбора даты
	document.getElementById("dateLogs").valueAsDate = new Date();
}
else {
	document.getElementById("dateLogs").value = date;
}

// Отправляем запрос при изменении даты
document.getElementById('dateLogs').addEventListener('change', sendDate);

// Отправляем запрос при первой загрузке страницы
sendDate();

// При навигации по истории обновляем содержимое страницы
window.addEventListener('popstate', function(event) {
    let path = window.location.pathname;
    date = path.split('/').pop();
    document.getElementById('dateLogs').value = date;
    sendDate();
});