<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Report'
//$this->params['breadcrumbs'][]=$this->title;
?>



<!-- <div class="img-container">
<img src="C:\xampp\htdocs\yiicrud2\Capture.PNG" alt="Al Hassan" width="100" height="100" style="vertical-align:middle">
</div> -->

<?= GridView::widget([
        'dataProvider' => $dataProvider,
      //  'filterModel' => $searchModel,
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

        ],
    ]); ?>
