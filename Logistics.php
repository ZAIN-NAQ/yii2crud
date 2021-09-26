<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "logistics".
 *
 * @property int $SrNO
 * @property string $JOBREFERNCENO
 * @property string $AWB
 * @property string $POREFERENCE
 * @property string $SUPPLIERNAME
 * @property string $MODEOFSHIPMENT
 * @property string $ETD
 * @property string $ETA
 * @property string $EQUIPMENTTYPE
 * @property string $DELIVERYLOCATION
 * @property string $NUMBEROFPACKAGES
 * @property string $extrafield
 * @property string $ITEMDESCREPTION
 * @property string $extrafeild_a
 * @property string $INVOICEVALUE
 * @property string $GPS
 * @property string $GPSDate
 * @property string $ShipmentServiceSupplier
 * @property float $FREIGHTCHARGES
 * @property float $CLEARINGCHARGES
 * @property float $CUSTOMDUTY
 * @property float $MISCCHARGES
 * @property float $LCCHARGES
 * @property string $TRANSPROTATIONCHRG
 * @property float $REFUNDDUTY
 */
class Logistics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'logistics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['JOBREFERNCENO', 'AWB', 'POREFERENCE', 'SUPPLIERNAME', 'MODEOFSHIPMENT', 'ETD', 'ETA', 'EQUIPMENTTYPE', 'DELIVERYLOCATION', 'NUMBEROFPACKAGES', 'extrafield', 'ITEMDESCREPTION', 'extrafeild_a', 'INVOICEVALUE', 'GPS', 'GPSDate', 'ShipmentServiceSupplier', 'FREIGHTCHARGES', 'CLEARINGCHARGES', 'CUSTOMDUTY', 'MISCCHARGES', 'LCCHARGES', 'TRANSPROTATIONCHRG', 'REFUNDDUTY'], 'required'],
            [['ETD', 'ETA', 'GPSDate'], 'safe'],
            [['FREIGHTCHARGES', 'CLEARINGCHARGES', 'CUSTOMDUTY', 'MISCCHARGES', 'LCCHARGES', 'REFUNDDUTY'], 'number'],
            [['JOBREFERNCENO', 'AWB', 'POREFERENCE', 'SUPPLIERNAME', 'MODEOFSHIPMENT', 'EQUIPMENTTYPE', 'DELIVERYLOCATION', 'NUMBEROFPACKAGES', 'extrafield', 'ITEMDESCREPTION', 'extrafeild_a', 'INVOICEVALUE', 'GPS', 'ShipmentServiceSupplier', 'TRANSPROTATIONCHRG'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'SrNO' => 'Serial No',
            'JOBREFERNCENO' => 'Job Refernce No',
            'AWB' => 'AWB',
            'POREFERENCE' => 'P.O.Reference',
            'SUPPLIERNAME' => 'Supplier Name',
            'MODEOFSHIPMENT' => 'Mode of Shipment',
            'ETD' => 'ETD',
            'ETA' => 'ETA',
            'EQUIPMENTTYPE' => 'Equipment Type',
            'DELIVERYLOCATION' => 'Delivery Location',
            'NUMBEROFPACKAGES' => 'Number of Packages',
            'extrafield' => 'Extra field',
            'ITEMDESCREPTION' => 'Item Description',
            'extrafeild_a' => 'Extrafeild A',
            'INVOICEVALUE' => 'Invoice Value',
            'GPS' => 'GPS',
            'GPSDate' => 'GPS Date',
            'ShipmentServiceSupplier' => 'Shipment Service Supplier',
            'FREIGHTCHARGES' => 'Freight Charges',
            'CLEARINGCHARGES' => 'Clearing Charges',
            'CUSTOMDUTY' => 'Custom Duty',
            'MISCCHARGES' => 'Misc Charges',
            'LCCHARGES' => 'LC charges',
            'TRANSPROTATIONCHRG' => 'Transprotation chrg',
            'REFUNDDUTY' => 'Refund Duty',
        ];
    }
    // public static function find()
    // {
    //     return new yii\base\models\LogisticsQuery(get_called_class());
    // }
}
