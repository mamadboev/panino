<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "achievements".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $info_uz
 * @property string|null $info_ru
 * @property string|null $info_en
 * @property string|null $picture
 * @property string|null $given_by
 */
class Achievements extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'achievements';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'info_uz', 'info_ru', 'info_en', 'picture', 'given_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'info_uz' => 'Info Uz',
            'info_ru' => 'Info Ru',
            'info_en' => 'Info En',
            'picture' => 'Picture',
            'given_by' => 'Given By',
        ];
    }
}
