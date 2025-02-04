﻿<!DOCTYPE html>
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
    <?php include 'menu.php'; ?>
    <h1>Создание задачи</h1>
    <form action="/site/add" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Имя пользователя</label>
            <input type="text" name="name" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="Имя" required />
            <small id="nameHelp" class="form-text text-muted">Введите своё имя</small>
        </div>
        <div class="form-group">
            <label for="InputEmail1">E-mail</label>
            <input type="email" name="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="1c@1c.ru" required />
            <small id="emailHelp" class="form-text text-muted">Указывайте что-то типа 1c@1c.ru</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Текст задачи</label>
            <textarea class="form-control" id="text" name="text" rows="3" required></textarea>
        </div>
        <button type="button" class="btn btn-info" id="preview">Предпросмотр</button>
        <button type="submit" class="btn btn-success" name="form">Отправить</button>
    </form>
</div>

<!--Модалка для превью -->
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Предпросмотр задачи</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <b>Имя пользователя:</b> <span id="nameContainer"></span><br />
                <b>Email:</b> <span id="emailContainer"></span><br />
                <b>Текст:</b> <span id="textContainer"></span><br />

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                </div>
        </div>
    </div>
</div>
</body>
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#file").change(function () {
            preview(this);
        });
        $('#save_task').on('click',function(){
           $('form').submit();
        });
        $('#preview').on('click', function() {
                var name = $('input[name=name]').val();
                var email = $('input[name=email]').val();
                var text = $('textarea[name=text]').val();
                if(name == '')
                {
                    alert('Введите Имя');
                    return false;
                }

                if(email == '')
                {
                    alert('Введите email');
                    return false;

                }
                if(text == '')
                {
                    alert('Введите текст');
                    return false;

                }
                $('#nameContainer').html(name);
                $('#emailContainer').html(email);
                $('#textContainer').html(text);
                $('.modal').modal('show');
            });
			
        });
</script>
</html>