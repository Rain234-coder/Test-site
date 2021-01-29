<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Предпросмотр задачи №<?=$data['id'];?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Имя пользователя: <?=$data['name']; ?></p>
            <p>Email: <?=$data['email']; ?></p>
            <p>Текст: <?=$data['text']; ?></p>
        </div>
        <form action="/site/save_preview" method="post">
            <input type="hidden" name="id" value="<?=$data['id'];?>" />
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
        </div>
        </form>
    </div>
</div>