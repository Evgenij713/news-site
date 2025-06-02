document.addEventListener('submit', function (e) {
    // Проверяем, что событие вызвано формой с классом .deleteForm
    if (e.target.classList.contains('deleteForm')) {
        e.preventDefault(); // Предотвращаем стандартную отправку формы

        // Подтверждение удаления
        if (!confirm("Вы точно хотите удалить запись?")) {
            return;
        }

        // Находим блок ошибок, связанный с этой формой
        const errorBox = e.target.closest('.item').nextElementSibling;

        // Собираем данные формы
        const formData = new FormData(e.target);

        // Отправляем данные на сервер
        fetch('', {
            method: 'POST',
            body: formData,
        })
		.then((response) => response.json())
		.then((data) => {
			errorBox.innerHTML = ''; // Очищаем блок ошибок
			if (data.res) {
				// Если удаление успешно, перенаправляем пользователя
				window.location.href = data.currentUrl;
			} else {
				// Если есть ошибки, отображаем их
				for (let i = 0; i < data.err.length; i++) {
					errorBox.innerHTML += '<p>' + data.err[i] + '</p>';
				}
			}
		})
		.catch((error) => {
			console.error('Ошибка:', error);
			errorBox.innerHTML = '<p>Произошла ошибка при отправке формы.</p>';
		});
    }
});