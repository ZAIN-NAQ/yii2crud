<?php
namespace yii\base\models;
use yii\base\models\Logistics;

class LogisticsQuery extends \yii\db\ActiveQuery{

    public function all($db = null)
    {
        return parent::all($db);
    } 


    public function byKeyword($keyword)
    {
        return $this->andWhere("MATCH(title, description, tags)
        AGAINST (:keyword)", ['keyword' => $keyword]);
    }
}




?>