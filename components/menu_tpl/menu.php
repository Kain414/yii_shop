<?php

use yii\helpers\Url;

?>

<?php  if (isset($category['childs'])): ?>
<li>
<?php  else: ?>
<li class="category-no-childs">
<?php  endif; ?>
    <a href="<?= Url::to(['category/view', 'id' => $category['id']]) ?>">
        <?= $category['name']?>
        <?php  if (isset($category['childs'])): ?>
            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
        <?php  endif; ?>
    </a>
    <?php  if (isset($category['childs'])): ?>
        <ul>
            <?= $this->getMenuHtml($category['childs'])?>
        </ul>
    <?php  endif; ?>
</li>
