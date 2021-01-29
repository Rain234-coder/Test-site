<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
            <div id="auth-form" class="panel panel-primary">
                <div class="panel-heading" style="display:flex">
                    <h3 class="panel-title">Форма авторизации</h3>
						<a href="/site/index" style="color:white; position:absolute; left:80%">Назад</a>
                </div>
                <form class="panel-body" action="/admin/login" method="post">
                    <div class="input-group">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-user"></span>
          </span>
                        <input type="text" id="login" name="login" class="form-control" placeholder="Login" required>
                    </div>
                    <div class="input-group">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-lock"></span>
          </span>
                        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top:3%">Войти</button>
                </form>
            </div>
        </div>
            <div class="col-lg-4"></div>

        </div>
        </div>
</body>
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>

</html>