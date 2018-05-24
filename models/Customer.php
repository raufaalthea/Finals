<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $title
 * @property string $surname
 * @property string $street
 * @property string $town
 * @property string $phone_number
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'phone_number'], 'required'],
            [[ 'title', 'surname', 'phone_number'], 'string', 'max' => 10],
            [['street', 'town'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'surname' => 'Surname',
            'street' => 'Street',
            'town' => 'Town',
            'phone_number' => 'Phone Number',
        ];
    }
}
