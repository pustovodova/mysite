<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
  <form class="form" style="width: 420px;" autocomplete="off" action="/reg" method="POST">
	{{@csrf_field()}}
  <h1 class="form_title">Регистрация</h1>
 <div class="form_grup">
    <input class="form_input" type="text" name="name" placeholder="Логин">
  </div>
 <div class="form_grup">
    <input class="form_input" type="email" name="email" placeholder="Почта">
  </div>
  <div class="form_grup">
    <input class="form_input" type="password" name="password" placeholder="Пароль">
  </div>
   <button class="button big fit">Зарегистрироваться</button>
  <ul class="actions vertical" style="margin-top: 8px;">
    <a href="/sign">Войти</a>
  </ul>
</form>

</body>
</html>
