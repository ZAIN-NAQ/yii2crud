<?php
use yii\helpers\Html;
use yii\grid\GridView;
?>

<?= 

GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SrNO',
            'JOBREFERNCENO',
            'AWB',
            // 'POREFERENCE',
            // 'SUPPLIERNAME',
            // 'MODEOFSHIPMENT',
            // 'ETD',
            // 'ETA',
            // 'EQUIPMENTTYPE',
            // 'DELIVERYLOCATION',
            // 'NUMBEROFPACKAGES',
            // 'extrafield',
            // 'ITEMDESCREPTION',
            // 'extrafeild_a',
            // 'INVOICEVALUE',
            // 'GPS',
            // 'GPSDate',
            // 'ShipmentServiceSupplier',
            // 'FREIGHTCHARGES',
            // 'CLEARINGCHARGES',
            // 'CUSTOMDUTY',
            // 'MISCCHARGES',
            // 'LCCHARGES',
            // 'TRANSPROTATIONCHRG',
            // 'REFUNDDUTY',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>