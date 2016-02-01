<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'SHOP';
$this->params['breadcrumbs'][] = $this->title;
$datas = array();
if ($_POST) {
    $datas = $_POST['ShopFormModel'];
}
?>
<a href='https://s33.mediacenter.hu/myadmin2/index.php?lang=hu&collation_connection=utf8_general_ci&token=5e72fe7487169a642935114427ee83e2&phpMyAdmin=477662a944c3159094b01b88975172b77f19542c#PMAURL-4:sql.php?db=hidegvarbt_yii2basic&table=shop&server=1&target=&token=5e72fe7487169a642935114427ee83e2' target="_blank">localhost/phpmyadmin</a>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class = "row">
        <div class = "col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'shop-form']); ?>

            <?= $form->field($model, 'name')->label('Típus'); ?>
            <?= $form->field($model, 'price')->label('Ár'); ?>
            <?= $form->field($model, 'diagonal')->label('Átmérő'); ?>
            <?= $form->field($model, 'height')->label('Magasság'); ?>
            <?= $form->field($model, 'width')->label('Szélesség'); ?>

            <?= $form->field($model, 'ddl1')->dropDownList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C'])->label('Legördülő próba 1'); ?>

            <?= $form->field($model, 'ddl2')->dropDownList([1 => 'egy', 'kettő'], ['prompt' => 'Choose...'])->label('Legördülő próba 2'); ?>


            <?= Html::submitButton('Submit', ['class' => 'btn btn-success']); ?>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
    <div style="float: right; position: fixed; right: 50px; top: 100px;">
        <ul>
            <?php foreach ($datas as $key => $value): ?>
            <li style="list-style-type: none;"><span><?php echo $key; ?>: <?php echo $value; ?></span></li>
            <?php endforeach; ?>
        </ul>

    </div>
</div>