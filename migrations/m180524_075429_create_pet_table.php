<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pet`.
 */
class m180524_075429_create_pet_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pet', [
            'id' => $this->primaryKey(),
            'type' => $this->string(50),
            'date_of_birth' => $this->date(),
            'medical_conditions' => $this->string(500)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pet');
    }
}
