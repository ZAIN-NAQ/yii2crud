<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LogisticsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logistics-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>
   

    <?=$form->field($model,'globalSearch') ?>
    <!-- <?= $form->field($model, 'SrNO') ?>

    <?= $form->field($model, 'JOBREFERNCENO') ?>

    <?= $form->field($model, 'AWB') ?>

    <?= $form->field($model, 'POREFERENCE') ?>

    <?= $form->field($model, 'SUPPLIERNAME') ?> -->

    <?php // echo $form->field($model, 'MODEOFSHIPMENT') ?>

    <?php // echo $form->field($model, 'ETD') ?>

    <?php // echo $form->field($model, 'ETA') ?>

    <?php // echo $form->field($model, 'EQUIPMENTTYPE') ?>

    <?php // echo $form->field($model, 'DELIVERYLOCATION') ?>

    <?php // echo $form->field($model, 'NUMBEROFPACKAGES') ?>

    <?php // echo $form->field($model, 'extrafield') ?>

    <?php // echo $form->field($model, 'ITEMDESCREPTION') ?>

    <?php // echo $form->field($model, 'extrafeild_a') ?>

    <?php // echo $form->field($model, 'INVOICEVALUE') ?>

    <?php // echo $form->field($model, 'GPS') ?>

    <?php // echo $form->field($model, 'GPSDate') ?>

    <?php // echo $form->field($model, 'ShipmentServiceSupplier') ?>

    <?php // echo $form->field($model, 'FREIGHTCHARGES') ?>

    <?php // echo $form->field($model, 'CLEARINGCHARGES') ?>

    <?php // echo $form->field($model, 'CUSTOMDUTY') ?>

    <?php // echo $form->field($model, 'MISCCHARGES') ?>

    <?php // echo $form->field($model, 'LCCHARGES') ?>

    <?php // echo $form->field($model, 'TRANSPROTATIONCHRG') ?>

    <?php // echo $form->field($model, 'REFUNDDUTY') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
