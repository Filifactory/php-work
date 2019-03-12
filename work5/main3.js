let login = prompt("Введите логин");
let password;

if (login === null) {
    alert('Вход отменен');
} else if (login !== 'Админ') {
    alert('Я вас не знаю');
} else {
    password = prompt('Введите пароль');
    if (password === 'Черный властелин') {
        alert('Добро пожаловать')

    } else if (password !== null) {
        alert('Пароль не верен');
    } else {
        alert('Вход отменен')
    }
}
