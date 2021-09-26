<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LogisticsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Logistics');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logistics-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Logistics'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php echo $this->render('_search', ['model' => $searchModel]);?>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SrNO',
            'JOBREFERNCENO',
            'AWB',
            'POREFERENCE',
            'SUPPLIERNAME',
            //'MODEOFSHIPMENT',
            //'ETD',
            //'ETA',
            //'EQUIPMENTTYPE',
            //'DELIVERYLOCATION',
            //'NUMBEROFPACKAGES',
            //'extrafield',
            //'ITEMDESCREPTION',
            //'extrafeild_a',
            //'INVOICEVALUE',
            //'GPS',
            //'GPSDate',
            //'ShipmentServiceSupplier',
            //'FREIGHTCHARGES',
            //'CLEARINGCHARGES',
            //'CUSTOMDUTY',
            //'MISCCHARGES',
            //'LCCHARGES',
            //'TRANSPROTATIONCHRG',
            //'REFUNDDUTY',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
