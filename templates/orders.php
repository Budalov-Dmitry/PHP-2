<?php

<?php foreach ($catalog as $item):?>
    <div>
        <a href="/product/OneProduct/?id=<?=$item['id']?>"><img src="/img/small/<?=$item['image']?>" alt=""></a>
        <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
        <h3><?=$item['description']?></h3>
        <p>price: <?=$item['price']?></p>
        <button data-id="<?= $item['id'] ?>" class="buy">Купить</button>
    </div>
<?php endforeach;?>