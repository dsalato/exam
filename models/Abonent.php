<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "abonents".
 *
 * @property int $id
 * @property string $name
 * @property string $number
 * @property string $addresses
 * @property string $face
 */
class Abonent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'abonents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'number', 'addresses', 'face'], 'required'],
            [['name', 'number', 'addresses', 'face'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'number' => 'Номер',
            'addresses' => 'Адрес',
            'face' => 'Лицо',
        ];
    }
}
