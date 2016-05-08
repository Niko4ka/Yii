<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?php foreach($products as $product): ?>
        <div>
            <h3><?= $product->title ?></h3>
            <p><?= $product->description ?></p>

        </div>
    <?php endforeach; ?>
</div>
