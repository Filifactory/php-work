"use strict" //нужно начинать все скрипты для совместимости с браузерами



alert('Hello World');
console.log('hello, concole');
//выведет сообщение пользователя
/*
Это тоже комментарий

 */

var message2;
var count;

message2 = 'Текст сообщения';
count = 2;


alert(message2);


//Переменную нельзя создавать с числа! Только с буква или _, $




//var n = 123;
//var k = 1.23;
//так работают числа, через точку не целые



//var checked = tru; //есть еще false (логическое значение)


//var user = { name: Вася};



//var apples ="1";
//var oranges = "2";
//alert(+apples + +oranges);


//+ вначале преобразует строку в число. Чтоб не выполнять склеивание



var num1, num2, result;
num1 = +prompt('Введите 1ое число',0);
num2 = +prompt('Введите 2ое число',0);
result = num1 + num2;
alert('Результат сложения: '+ result);