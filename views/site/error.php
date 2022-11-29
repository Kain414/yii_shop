<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error container">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div style="display: flex; align-items: center; flex-direction: column;">
        <h2 style="color: #faa652; font-family: system-ui; text-align: center;"><?= nl2br(Html::encode($message))?></h2>
        <?= Html::img('@web/images/404/404.png', ['class' => '', 'style' => 'width: 512px; height: 512px;']) ?>
    </div>

    <!-- <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div> -->

    <!-- <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p> -->

</div>
