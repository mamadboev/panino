<?php


namespace app\models;


use yii\db\ActiveRecord;

class Message extends ActiveRecord
{
    public static function tableName()
    {
        return 'message';
    }
    public function rules()
    {
        return [
           [['name','phone','message','email'],'required'],
           [['name','message'],'text'],
           [['email'],'email'],


        ];
    }
}