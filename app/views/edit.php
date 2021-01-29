<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$data['title'];?></title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
				<h1 style="color:black; text-align:center">Панель администратора</h1>
                <ul class="nav navbar-nav navbar-right">
					<form action="/admin/logout" method="POST">
                    <li><button type="submit" class="btn btn-danger">Выход</li></button></form
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <h1>Редактирование задачи №<?=$data['task']['id'];?></h1>
    <form action="/admin/save" method="POST">
      <input type="hidden" name="id" value="<?=$data['task']['id'];?>" />

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Текст задачи</label>
            <textarea class="form-control" id="text" name="text" rows="3" required><?=$data['task']['text'];?></textarea>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="done" id="done" <?php if($data['task']['status'] == 'Выполнено') echo 'checked'; ?>>
            <label class="form-check-label" for="done">Выполнено</label>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
		 <form action="/admin/index" method="POST">
		<button type="submit" class="btn btn-primary">Назад</button>
		</form>
    </form>
</div>
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>


</html>