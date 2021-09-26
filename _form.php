<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Logistics */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logistics-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'JOBREFERNCENO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AWB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'POREFERENCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SUPPLIERNAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MODEOFSHIPMENT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ETD')->textInput() ?>

    <?= $form->field($model, 'ETA')->textInput() ?>

    <?= $form->field($model, 'EQUIPMENTTYPE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DELIVERYLOCATION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMBEROFPACKAGES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'extrafield')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ITEMDESCREPTION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'extrafeild_a')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'INVOICEVALUE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GPS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GPSDate')->textInput() ?>

    <?= $form->field($model, 'ShipmentServiceSupplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FREIGHTCHARGES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLEARINGCHARGES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CUSTOMDUTY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MISCCHARGES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LCCHARGES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TRANSPROTATIONCHRG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REFUNDDUTY')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
