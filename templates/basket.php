

<?php foreach ($catalog as $item):?>
    <div id="<?= $item['id'] ?>" >
        <img src="img/small/<?=$item['image']?>" alt="">
        <h3><?=$item['description']?></h3>
        <p>price: <?=$item['price']?></p>
        <button data-id="<?= $item['id'] ?>" class="delete">удалить</button>
        <button formaction="">у</button>
    </div>
<?php endforeach;?>


<script>
    let buttons = document.querySelectorAll('.delete');
    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (
                async () => {
                    const response = await fetch('/basket/remove/?id=' + id);
                    const answer = await response.json();
                    document.getElementById('count').innerText = answer.count;
                    document.getElementById(answer.id).remove();
                }
            )();
        });
    });
</script>
