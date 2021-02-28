# phpM1
Примеры импортов:<br>
include("./phpM1/string.php"); // Для работы стоками<br>
include("./phpM1/js.php"); // Простые функции JS на php<br>
include("./phpM1/requests.php"); // Для простой работы с запросами<br>
string.php:<br>
1. cout() - Тоже, что и echo(), но позволяет защититься от различных атак. <br>
2. get_return() - Тоже, что и $_GET[], но позволяет защититься от различных атак. <br>
3. post_return() - Тоже, что и $_POST[], но позволяет защититься от различных атак. <br>
4. color() - Делает текст цветным. Пример: echo("Text: ".color("hello!", "red")) или echo("Text: ".color("hello!", "#ffbb77"))<br>
5. b() - Делает текст жирным. Работает так же как и color()<br>
6. vmail() - Проверяет, есть ли в строке почта(-ы). Если да, вернет true.<br>
7. vurl() - Проверяет, есть ли в строке ссылка(-и). Если да, вернет true.<br>
8. filt() - позволяет защититься от различных инъекционных атак. Пример: echo(filt("<script>alert(\"test\")</script>"))<br>
<br>
requests.php:<br>
1. request_get() - отправляет get запрос c данными. Пример: request_get("http://example.com", "opt=123&v=1.3")<br>
2. request_post() - отправляет post запрос c данными. Пример: request_post("http://example.com", "opt=123&v=1.3")<br>
<br>
js.php:<br>
1. alert() - Тот же alert, что и в Js. Пример: alert("Hello")<br>
2. console() - Тот же console.log, что и в Js. Пример: console("Hello")<br>

