<?php

namespace app\models;

use yii\base\Model;


class ShopFormModel extends Model {

    public $name;
    public $price;
    public $diagonal;
    public $height;
    public $width;
    public $ddl1;
    public $ddl2;

//    public function __construct() {
//        ;
//    }
    public function rules() {
        return [
            [['price', 'diagonal', 'height', 'width'], 'number']
        ];
    }

    public function query() {
        $sql = 'SELECT * FROM shop';

        $model = User::findBySql($sql)->all();
    }

}
