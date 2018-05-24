<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pet".
 *
 * @property int $id
 * @property string $type
 * @property string $date_of_birth
 * @property string $medical conditions
 */
class Pet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_of_birth'], 'safe'],
            [['type'], 'string', 'max' => 50],
            [['medical_conditions'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'date_of_birth' => 'Date Of Birth',
            'medical_conditions' => 'Medical Conditions',
        ];
    }
}
