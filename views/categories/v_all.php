<div class="categories">
    <a class="categories__add-button" href="<?=BASE_URL?>category/add">Добавить категорию</a>
    <div class="categories__list">
        <?php foreach (array_reverse($categories) as $category): ?>
            <div class="category item">
                <div class="category__name"><?=$category['name']?></div>
                <div class="category__actions">
                    <a class="category__edit-button" href="<?=BASE_URL?>category/edit/<?=$category['id_category']?>">Редактировать</a>
                    <form class="category__delete-form deleteForm" method="post">
                        <input type="hidden" name="id" value="<?=$category['id_category']?>">
                        <button type="submit" class="category__delete-button">Удалить</button>
                    </form>
                </div>
            </div>
            <div class="err"></div>
        <?php endforeach; ?>
    </div>
</div>
<script src="<?=BASE_URL?>assets/js/delete.js"></script>