<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Logistics;

/**
 * LogisticsSearch represents the model behind the search form of `app\models\Logistics`.
 */
class LogisticsSearch extends Logistics
{
    /**
     * {@inheritdoc}
     */
    public $globalSearch;
    public function rules()
    {
        return [
            [['SrNO'], 'integer'],
            [['JOBREFERNCENO', 'AWB', 'POREFERENCE', 'SUPPLIERNAME', 'MODEOFSHIPMENT', 'ETD', 'ETA', 'EQUIPMENTTYPE', 'DELIVERYLOCATION', 'NUMBEROFPACKAGES', 'extrafield', 'ITEMDESCREPTION', 'extrafeild_a', 'INVOICEVALUE', 'GPS', 'GPSDate', 'ShipmentServiceSupplier', 'TRANSPROTATIONCHRG'], 'safe'],
            [['FREIGHTCHARGES', 'CLEARINGCHARGES', 'CUSTOMDUTY', 'MISCCHARGES', 'LCCHARGES', 'REFUNDDUTY'], 'number'],
            [['globalSearch'],'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Logistics::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        // $query->andFilterWhere([
        //     'SrNO' => $this->SrNO,
        //     'ETD' => $this->ETD,
        //     'ETA' => $this->ETA,
        //     'GPSDate' => $this->GPSDate,
        //     'FREIGHTCHARGES' => $this->FREIGHTCHARGES,
        //     'CLEARINGCHARGES' => $this->CLEARINGCHARGES,
        //     'CUSTOMDUTY' => $this->CUSTOMDUTY,
        //     'MISCCHARGES' => $this->MISCCHARGES,
        //     'LCCHARGES' => $this->LCCHARGES,
        //     'REFUNDDUTY' => $this->REFUNDDUTY,
        // ]);

        $query->orFilterWhere(['like', 'JOBREFERNCENO', $this->globalSearch])
            ->orFilterWhere(['like', 'AWB', $this->globalSearch])
            ->orFilterWhere(['like', 'POREFERENCE', $this->globalSearch])
            ->orFilterWhere(['like', 'SUPPLIERNAME', $this->globalSearch])
            ->orFilterWhere(['like', 'MODEOFSHIPMENT', $this->globalSearch])
            ->orFilterWhere(['like', 'EQUIPMENTTYPE', $this->globalSearch])
            ->orFilterWhere(['like', 'DELIVERYLOCATION', $this->globalSearch])
            ->orFilterWhere(['like', 'NUMBEROFPACKAGES', $this->globalSearch])
            ->orFilterWhere(['like', 'extrafield', $this->globalSearch])
            ->orFilterWhere(['like', 'ITEMDESCREPTION', $this->globalSearch])
            ->orFilterWhere(['like', 'extrafeild_a', $this->globalSearch])
            ->orFilterWhere(['like', 'INVOICEVALUE', $this->globalSearch])
            ->orFilterWhere(['like', 'GPS', $this->globalSearch])
            ->orFilterWhere(['like', 'ShipmentServiceSupplier', $this->globalSearch])
            ->orFilterWhere(['like', 'TRANSPROTATIONCHRG', $this->globalSearch]);

        return $dataProvider;
    }
}
