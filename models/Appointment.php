<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appointment".
 *
 * @property int $id
 * @property string $customer_id
 * @property string $pet_id
 * @property string $date_of_appointment
 * @property string $time_of_appointment
 */
class Appointment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'appointment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_of_appointment', 'time_of_appointment'], 'safe'],
            [['customer_id', 'pet_id'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'pet_id' => 'Pet ID',
            'date_of_appointment' => 'Date Of Appointment',
            'time_of_appointment' => 'Time Of Appointment',
        ];
    }
}
