<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="container">
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?>

<?php if (!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table .table-hover .table-striped">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Количество</th>
                    <th>Цена</th>
                    <th>Сумма</th>
                    <th>Убрать</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item): ?>
                <tr>
                    <td><?= Html::img('@web/images/products/' . $item['img'], ['style' => 'width: 48px; height: 48px; object-fit: contain']) ?></td>
                    <td><a href="<?= Url::to(['product/view', 'id' => $id]) ?>"><?= $item['name'] ?></a></td>
                    <td><?= $item['qty'] ?> шт.</td>
                    <td><?= $item['price'] ?>$</td>
                    <td><?= $item['price'] * $item['qty'] ?>$</td>
                    <td><span data-id="<?= $id ?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                <tr>
            <?php endforeach; ?>
            <tr>
                <td >Итого: </td>
                <td><?= $session['cart.qty'] ?> шт.</td>
            </tr>
            <tr>
                <td >На сумму: </td>
                <td><?= $session['cart.sum'] ?>$</td>
            </tr>
            </tbody>
        </table>
    </div>
    <?php $form = ActiveForm::begin([
        'enableClientScript' => true,
    ]) ?>
                <?= $form->field($order, 'name') ?>
                <?= $form->field($order, 'email') ?>
                <?= $form->field($order, 'phone') ?>
                <?= $form->field($order, 'address') ?>
                <?= Html::submitButton('Заказать', ['class' => 'btn btn-success mb-4']) ?>
    <?php ActiveForm::end()?>
<?php else: ?> 
    <h3>Корзина пуста</h3>
<?php endif; ?>
</div>