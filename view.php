<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Logistics */

$this->title = $model->SrNO;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Logistics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="logistics-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'SrNO' => $model->SrNO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'SrNO' => $model->SrNO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'SrNO',
            'JOBREFERNCENO',
            'AWB',
            'POREFERENCE',
            'SUPPLIERNAME',
            'MODEOFSHIPMENT',
            'ETD',
            'ETA',
            'EQUIPMENTTYPE',
            'DELIVERYLOCATION',
            'NUMBEROFPACKAGES',
            'extrafield',
            'ITEMDESCREPTION',
            'extrafeild_a',
            'INVOICEVALUE',
            'GPS',
            'GPSDate',
            'ShipmentServiceSupplier',
            'FREIGHTCHARGES',
            'CLEARINGCHARGES',
            'CUSTOMDUTY',
            'MISCCHARGES',
            'LCCHARGES',
            'TRANSPROTATIONCHRG',
            'REFUNDDUTY',
        ],
    ]) ?>

</div>
