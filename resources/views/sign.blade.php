<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>	
  <form class="form" autocomplete="off" action="/sign" method="POST">
	{{@csrf_field()}}
  <h1 class="form_title">Вход</h1>
 <div class="form_grup">
    <input class="form_input" type="email" name="email" placeholder="Email">
  </div>
  <div class="form_grup">
    <input class="form_input" type="password" name="password" placeholder="Пароль">
  </div>
	<button class="button big fit" >Войти</button>
  <ul class="actions vertical" style="margin-top: 8px;">
    <a href="/reg">Зарегистрироваться</a>
  </ul>
</form>

</body>
</html>