<?php

use yii\widgets\LinkPager;

?>


<div class="products-index">

<?php foreach($products as $product): ?>
        <div>
            <h3><?= $product->title ?></h3>
            <p><?= $product->description ?></p>
        </div>
<?php endforeach ?>

<?= LinkPager::widget(['pagination' => $pagination, ]) ?>

</div>