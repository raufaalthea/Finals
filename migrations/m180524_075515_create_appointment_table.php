<?php

use yii\db\Migration;

/**
 * Handles the creation of table `appointment`.
 */
class m180524_075515_create_appointment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('appointment', [
            'id' => $this->primaryKey(),
            'customer_id' => $this ->integer(10),
            'pet_id' => $this ->integer(10),
            'date_of_appointment' => $this ->date(),
            'time_of_appointment' => $this ->time()
        ]);
        $this->createIndex(
            'idx-appointment-customer_id',
            'appointment','customer_id'
        );

        $this->addForeignKey(
            'fk-appointment-customer',
            'appointment','customer_id',
            'customer', 'id'
        );

        $this->createIndex(
            'idx-appointment-pet',
            'appointment','pet_id'
        );

        $this->addForeignKey(
            'fk-appointment-pet',
            'appointment','pet_id',
            'pet', 'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-appointment-customer', 'appointment');
        $this->dropForeignKey('fk-appointment-pet', 'appointment');
        $this->dropIndex('idx-appointment-customer_id','appointment');
        $this->dropIndex('idx-appointment-pet_id','appointment');
        $this->dropTable('appointment');
    }
}

