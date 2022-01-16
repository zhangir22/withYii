<?php

namespace app\models;

use Yii;
use yii\base\Model;


class MarkerForm extends Model
{
    public $data;
    public $background;
    public $depth;

    public function rules(){
        return [
            [[ 'background', 'depth','data'], 'required'],
        ];
    }


}